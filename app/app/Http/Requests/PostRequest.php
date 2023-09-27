<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    //バリデーションの内容
    public function rules()
    {
        return [
            'date' => 'required',
            'title' => 'required|string|max:30',
            'brand_shoe' => 'required',
            'usage' => 'required',
            'size' => 'required',
            'weight' => 'required|numeric',
            'review' => 'requiredstring|max:1000',
        ];
    }
    //エラーメッセージに表示される項目名を変更
    public function attributes()
    {
        return[
            'date' => '日付',
            'title' => 'タイトル',
            'brand_shoe' => 'シューズ',
            'usage' => '使用用途',
            'size' => 'サイズ',
            'weight' => '重量',
            'review' => 'レビュー',
        ];
    }
    //エラーメッセージ内容を変更
    public function messages()
    {
        return[
            'date.required' => '日付を入力してください。',
            'title.required' => 'タイトルを入力してください。',
            'brand_shoe.required' => 'シューズを選択してください。',
            'usage.required' => '使用用途を選択してください。',
            'size.required' => 'サイズを入力してください。',
            'weight.required' => '重量を入力してください。',
            'review.required' => 'レビューを入力してください。',
        ];
    }
}
