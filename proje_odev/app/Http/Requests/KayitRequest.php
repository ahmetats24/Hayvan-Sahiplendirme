<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class KayitRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'ad' => 'required',
            'soyad' => 'required',
            'cinsiyet' => 'required',
            'il' => 'required',
            'rumuz' => 'required',
            'sifre' => 'required',
            'sifre2' => 'required|same:sifre',
            'mail' => 'required|email',
        ];
    }

    public function messages()
    {
        return [
            'ad.required' => 'Ad alanı zorunludur.',
            'soyad.required' => 'Soyad alanı zorunludur.',
            'cinsiyet.required' => 'Cinsiyet alanı zorunludur.',
            'il.required' => 'Şehir alanı zorunludur.',
            'rumuz.required' => 'Kullanıcı adı alanı zorunludur.',
            'sifre.required' => 'Şifre alanı zorunludur.',
            'sifre2.required' => 'Şifre (tekrar) alanı zorunludur.',
            'sifre2.same' => 'Şifre ve Şifre (tekrar) alanları aynı olmalıdır.',
            'mail.required' => 'E-mail alanı zorunludur.',
            'mail.email' => 'Geçerli bir e-mail adresi giriniz.',
        ];
    }
}
