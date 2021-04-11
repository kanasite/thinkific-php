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

    /**
     * @throws ApiException
     */
    public function getAll() {
        throw new ApiException( [ "Not Supported" => [ "The API Call 'getAll()' is not supported by the Thinkific Api" ] ] );
    }

    /**
     * @throws ApiException
     */
    public function add() {
        throw new ApiException( [ "Not Supported" => [ "The API Call 'getAll()' is not supported by the Thinkific Api" ] ] );
    }

    /**
     * @throws ApiException
     */
    public function delete() {
        throw new ApiException( [ "Not Supported" => [ "The API Call 'getAll()' is not supported by the Thinkific Api" ] ] );
    }

    /**
     * @throws ApiException
     */
    public function getById() {
        throw new ApiException( [ "Not Supported" => [ "The API Call 'getAll()' is not supported by the Thinkific Api" ] ] );
    }

    /**
     * @throws ApiException
     */
    public function update() {
        throw new ApiException( [ "Not Supported" => [ "The API Call 'getAll()' is not supported by the Thinkific Api" ] ] );
    }
}