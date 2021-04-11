<?php

namespace Thinkific\Api;

class Bundles extends AbstractApi {
    public function enroll($id, $data) {
        return json_decode( $this->client->request( [
            "endpoint"   => 'bundles/'.$id.'/enrollments',
            "httpmethod" => "POST",
            "query"      => $data
        ] ), true );
    }
}