<?php

function fGeolocation($page = 'home') {
    $files = [
        __DIR__ . "/../_functions/conection.php",
        __DIR__ . "/_functions/conection.php"
    ];

    foreach ($files as $file) {
        if (file_exists($file)) {
            require_once $file;
            break;
        }
    }

    if(!isset($pdo)) global $pdo;

    function getIpCliente()
    {
        if (!empty($_SERVER['HTTP_CF_CONNECTING_IP'])) {
            return $_SERVER['HTTP_CF_CONNECTING_IP'];
        }

        if (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
            return trim(explode(',', $_SERVER['HTTP_X_FORWARDED_FOR'])[0]);
        }

        return $_SERVER['REMOTE_ADDR'];
    }

    $ip = getIpCliente();

    //$ip = "102.214.36.141";

    $url = "http://ip-api.com/json/$ip?fields=status,message,country,countryCode,region,regionName,city,zip,lat,lon,timezone,isp,org,as,query";

    $response = @file_get_contents($url);

    if ($response === false) {
        return;
    }

    $data = json_decode($response, true);

    if ($data['status'] != 'success') {
        return;
    }

    try {
        $check = $pdo->prepare("
            SELECT id
            FROM ip_geolocation
            WHERE query_ip = :query_ip
            AND page = :page
            AND created_at >= DATE_SUB(NOW(), INTERVAL 15 MINUTE)
            LIMIT 1
        ");

        $check->execute([
            ':query_ip' => $data['query'],
            ':page'     => $page
        ]);

        if ($check->fetch()) {
            return;
        }

        $stmt = $pdo->prepare("
            INSERT INTO ip_geolocation (
                page,
                query_ip,
                status,
                country,
                country_code,
                region,
                region_name,
                city,
                zip,
                latitude,
                longitude,
                timezone,
                isp,
                org,
                autonomous_system
            ) VALUES (
                :page,
                :query_ip,
                :status,
                :country,
                :country_code,
                :region,
                :region_name,
                :city,
                :zip,
                :latitude,
                :longitude,
                :timezone,
                :isp,
                :org,
                :autonomous_system
            )
        ");

        $stmt->execute([
            ':page'  => $page,
            ':query_ip'           => $data['query'],
            ':status'             => $data['status'],
            ':country'            => $data['country'],
            ':country_code'       => $data['countryCode'],
            ':region'             => $data['region'],
            ':region_name'        => $data['regionName'],
            ':city'               => $data['city'],
            ':zip'                => $data['zip'],
            ':latitude'           => $data['lat'],
            ':longitude'          => $data['lon'],
            ':timezone'           => $data['timezone'],
            ':isp'                => $data['isp'],
            ':org'                => $data['org'],
            ':autonomous_system'  => $data['as'],
        ]);

        return;

    } catch (PDOException $e) {
        return;
    }
}