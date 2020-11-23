<?php
declare(strict_types=1);

namespace Plaisio\ExceptionHandler;

use Plaisio\Response\Response;

/**
 * Interface for exception handlers.
 */
interface ExceptionHandler
{
  //--------------------------------------------------------------------------------------------------------------------
  /**
   * Handles an exception thrown in the constructor of a page object.
   *
   * @param \Throwable $exception The exception.
   *
   * @return Response
   *
   * @since 1.0.0
   * @api
   */
  public function handleConstructException(\Throwable $exception): Response;

  //--------------------------------------------------------------------------------------------------------------------
  /**
   * Handles an exception thrown during finalizing the response.
   *
   * @param \Throwable $exception The exception.
   *
   * @return Response
   *
   * @since 1.0.0
   * @api
   */
  public function handleFinalizeException(\Throwable $exception): Response;

  //--------------------------------------------------------------------------------------------------------------------
  /**
   * Handles an exception thrown during preparation (i.e. before the constructor of the page object).
   *
   * @param \Throwable $exception The exception.
   *
   * @return Response
   *
   * @since 1.0.0
   * @api
   */
  public function handlePrepareException(\Throwable $exception): Response;

  //--------------------------------------------------------------------------------------------------------------------
  /**
   * Handles an exception thrown during generating the response by a page object.
   *
   * @param \Throwable $exception The exception.
   *
   * @return Response
   *
   * @since 1.0.0
   * @api
   */
  public function handleResponseException(\Throwable $exception): Response;

  //--------------------------------------------------------------------------------------------------------------------
}

//----------------------------------------------------------------------------------------------------------------------
