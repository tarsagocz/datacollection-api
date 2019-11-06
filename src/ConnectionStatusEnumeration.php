<?php
/**
 * @author Bc. Marek Fajfr <mfajfr90(at)gmail.com>
 * Created at: 15:24 27.09.2019
 */

namespace DataCollection;

class ConnectionStatusEnumeration
{
    const SUCCESS = 'success';
    const ERROR = 'error';
    const FORM_ERROR = 'form-error';
    const MODEL_NOT_FOUND = 'model-not-found';
}