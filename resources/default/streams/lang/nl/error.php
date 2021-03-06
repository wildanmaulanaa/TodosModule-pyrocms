<?php

return [
    '400' => [
        'name'    => 'Bad Request',
        'message' => 'The request cannot be fulfilled due to bad syntax.',
    ],
    '401' => [
        'name'    => 'Unauthorized',
        'message' => 'Authentication is required and has failed or has not yet been provided.',
    ],
    '402' => [
        'name'    => 'Payment Required',
        'message' => 'Payment is required and has failed or has not yet been provided.',
    ],
    '403' => [
        'name'    => 'Forbidden',
        'message' => 'The request was a valid request, but the server is refusing to respond to it.',
    ],
    '404' => [
        'name'    => 'Pagina niet gevonden',
        'message' => 'The requested resource could not be found but may be available again in the future.',
    ],
    '405' => [
        'name'    => 'Method Not Allowed',
        'message' => 'A request was made of a resource using a request method not supported by that resource.',
    ],
    '406' => [
        'name'    => 'Not Acceptable',
        'message' => 'The requested resource is only capable of generating content not acceptable.',
    ],
    '408' => [
        'name'    => 'Request Timeout',
        'message' => 'The server did not receive a complete request message in time.',
    ],
    '409' => [
        'name'    => 'Conflict',
        'message' => 'The request could not be processed because of conflict in the request.',
    ],
    '410' => [
        'name'    => 'Verdwenen',
        'message' => 'The requested resource is no longer available and will not be available again.',
    ],
    '411' => [
        'name'    => 'Lengte benodigd',
        'message' => 'The request did not specify the length of its content, which is required by the resource.',
    ],
    '412' => [
        'name'    => 'Precondition gefaald',
        'message' => 'The server does not meet one of the preconditions that the requester put on the request.',
    ],
    '413' => [
        'name'    => 'Payload Too Large',
        'message' => 'The server cannot process the request because the request payload is too large.',
    ],
    '414' => [
        'name'    => 'URI te lang',
        'message' => 'The request-target is longer than the server is willing to interpret.',
    ],
    '415' => [
        'name'    => 'Niet-ondersteunde Media Type',
        'message' => 'The request entity has a media type which the server or resource does not support.',
    ],
    '417' => [
        'name'    => 'Expectation gefaald',
        'message' => 'The expectation given could not be met by at least one of the inbound servers.',
    ],
    '422' => [
        'name'    => 'Unprocessable Entity',
        'message' => 'The request was well-formed but was unable to be followed due to semantic errors.',
    ],
    '426' => [
        'name'    => 'Upgrade benodigd',
        'message' => 'The server cannot process the request using the current protocol.',
    ],
    '428' => [
        'name'    => 'Precondition benodigd',
        'message' => 'The origin server requires the request to be conditional.',
    ],
    '429' => [
        'name'    => 'Teveel Requests',
        'message' => 'The user has sent too many requests in a given amount of time.',
    ],
    '500' => [
        'name'    => 'Interne server fout',
        'message' => 'An error has occurred and this resource cannot be displayed.',
    ],
    '501' => [
        'name'    => 'Niet ge??mplementeerd',
        'message' => 'The server either does not recognize the request method, or it lacks the ability to fulfil the request.',
    ],
    '502' => [
        'name'    => 'Bad Gateway',
        'message' => 'The server was acting as a gateway or proxy and received an invalid response from the upstream server.',
    ],
    '503' => [
        'name'    => 'Service onbereikbaar',
        'message' => 'The server is currently unavailable. It may be overloaded or down for maintenance.',
    ],
    '504' => [
        'name'    => 'Gateway Timeout',
        'message' => 'The server was acting as a gateway or proxy and did not receive a timely response from the upstream server.',
    ],
    '505' => [
        'name'    => 'HTTP versie niet ondersteund',
        'message' => 'The server does not support the HTTP protocol version used in the request.',
    ],
];
