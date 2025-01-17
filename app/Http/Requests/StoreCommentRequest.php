<?php

namespace App\Http\Requests;

use App\Comment;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class StoreCommentRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('comment_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'order_application_id' => [
                'required',
                'integer',
            ],
            'user_id'             => [
                'required',
                'integer',
            ],
            'comment_text'        => [
                'required',
            ],
        ];
    }
}
