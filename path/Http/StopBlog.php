<?php
/*
* This file was automatically generated by Path
* Modify to suit your usage
*
*/
namespace Path\App\Http\MiddleWares;


use Path\Core\Http\MiddleWare;
use Path\Core\Http\Request;
use Path\Core\Http\Response;

class StopBlog implements MiddleWare
{

    /**
     * @param Request $request
     * @param Response $response
     * @return mixed
     * @throws \Path\ConfigException
     * @internal param $params
     */
    public function validate(Request $request, Response $response):bool
    {
        $author_id = @$request->args->author_id;
        return true;
    }

    public function fallBack(Request $request, Response $response)
    {
            return $response->error('Author ID is not 2',null);
    }
}
