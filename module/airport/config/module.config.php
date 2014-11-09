<?php
return array(
    'router' => array(
        'routes' => array(
            'airport.rest.iata-airport-codes' => array(
                'type' => 'Segment',
                'options' => array(
                    'route' => '/iata_airport_codes[/:iata_airport_code]',
                    'defaults' => array(
                        'controller' => 'airport\\V1\\Rest\\IataAirportCodes\\Controller',
                    ),
                ),
            ),
        ),
    ),
    'zf-versioning' => array(
        'uri' => array(
            0 => 'airport.rest.iata-airport-codes',
        ),
    ),
    'zf-rest' => array(
        'airport\\V1\\Rest\\IataAirportCodes\\Controller' => array(
            'listener' => 'airport\\V1\\Rest\\IataAirportCodes\\IataAirportCodesResource',
            'route_name' => 'airport.rest.iata-airport-codes',
            'route_identifier_name' => 'iata_airport_code',
            'collection_name' => 'iata_airport_codes',
            'entity_http_methods' => array(
                0 => 'GET',
            ),
            'collection_http_methods' => array(
                0 => 'GET',
            ),
            'collection_query_whitelist' => array(),
            'page_size' => 25,
            'page_size_param' => null,
            'entity_class' => 'airport\\V1\\Rest\\IataAirportCodes\\IataAirportCodesEntity',
            'collection_class' => 'airport\\V1\\Rest\\IataAirportCodes\\IataAirportCodesCollection',
            'service_name' => 'iata_airport_codes',
        ),
    ),
    'zf-content-negotiation' => array(
        'controllers' => array(
            'airport\\V1\\Rest\\IataAirportCodes\\Controller' => 'HalJson',
        ),
        'accept_whitelist' => array(
            'airport\\V1\\Rest\\IataAirportCodes\\Controller' => array(
                0 => 'application/vnd.airport.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ),
        ),
        'content_type_whitelist' => array(
            'airport\\V1\\Rest\\IataAirportCodes\\Controller' => array(
                0 => 'application/vnd.airport.v1+json',
                1 => 'application/json',
            ),
        ),
    ),
    'zf-hal' => array(
        'metadata_map' => array(
            'airport\\V1\\Rest\\IataAirportCodes\\IataAirportCodesEntity' => array(
                'entity_identifier_name' => 'code',
                'route_name' => 'airport.rest.iata-airport-codes',
                'route_identifier_name' => 'iata_airport_code',
                'hydrator' => 'Zend\\Stdlib\\Hydrator\\ArraySerializable',
            ),
            'airport\\V1\\Rest\\IataAirportCodes\\IataAirportCodesCollection' => array(
                'entity_identifier_name' => 'code',
                'route_name' => 'airport.rest.iata-airport-codes',
                'route_identifier_name' => 'iata_airport_code',
                'is_collection' => true,
            ),
        ),
    ),
    'zf-apigility' => array(
        'db-connected' => array(
            'airport\\V1\\Rest\\IataAirportCodes\\IataAirportCodesResource' => array(
                'adapter_name' => 'conftravdb-prod',
                'table_name' => 'iata_airport_codes',
                'hydrator_name' => 'Zend\\Stdlib\\Hydrator\\ArraySerializable',
                'controller_service_name' => 'airport\\V1\\Rest\\IataAirportCodes\\Controller',
                'entity_identifier_name' => 'code',
                'table_service' => 'airport\\V1\\Rest\\IataAirportCodes\\IataAirportCodesResource\\Table',
            ),
        ),
    ),
    'zf-content-validation' => array(
        'airport\\V1\\Rest\\IataAirportCodes\\Controller' => array(
            'input_filter' => 'airport\\V1\\Rest\\IataAirportCodes\\Validator',
        ),
    ),
    'input_filter_specs' => array(
        'airport\\V1\\Rest\\IataAirportCodes\\Validator' => array(),
    ),
);
