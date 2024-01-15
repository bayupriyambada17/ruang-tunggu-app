<?php

namespace App\Helpers;

class ValidatorMessage
{
    public static function validator()
    {
        return [
            'required' => ':attribute wajib diisi.',
            'unique' => ':attribute sudah digunakan.',
            'min' => [
                'string' => ':attribute harus minimal :min karakter.',
            ],
            'max' => [
                'string' => ':attribute tidak boleh melebihi :max karakter.',
                'file' => ':attribute tidak boleh melebihi :max kilobita.',
            ],
            'boolean' => ':attribute harus berupa 0 atau 1.',
            'email' => ':attribute harus berupa alamat email yang valid.',
            'mimes' => ':attribute harus berupa file dengan tipe: :values',
        ];
    }
}
