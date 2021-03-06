<?php

namespace Bitreserve\Tests\Exception;

use Bitreserve\Exception\BitreserveClientException;

/**
 * BitreserveClientExceptionTest.
 */
class BitreserveClientExceptionTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function shouldReturnInstanceOfBitreserveClientException()
    {
        $exception = new BitreserveClientException('foobar');

        $this->assertInstanceOf('Bitreserve\Exception\BitreserveClientException', $exception);
    }

    /**
     * @test
     */
    public function shouldReturnMessage()
    {
        $exception = new BitreserveClientException('foobar');

        $this->assertEquals('foobar', $exception->getMessage());
    }

    /**
     * @test
     */
    public function shouldReturnError()
    {
        $exception = new BitreserveClientException('foobar', 'Error');

        $this->assertEquals('Error', $exception->getError());
    }

    /**
     * @test
     */
    public function shouldReturnHttpCode()
    {
        $exception = new BitreserveClientException('foobar', NULL, 500);

        $this->assertEquals(500, $exception->getHttpCode());
    }

    /**
     * @test
     */
    public function shouldReturnResponse()
    {
        $exception = new BitreserveClientException('foobar', NULL, NULL, 'Response');

        $this->assertEquals('Response', $exception->getResponse());
    }

    /**
     * @test
     */
    public function shouldReturnRequest()
    {
        $exception = new BitreserveClientException('foobar', NULL, NULL, NULL, 'Request');

        $this->assertEquals('Request', $exception->getRequest());
    }
}
