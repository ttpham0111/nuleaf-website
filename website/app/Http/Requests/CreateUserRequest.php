<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class CreateUserRequest extends Request
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
  public function rules()
  {
    $user    = $this->route('user');
    $user_id = isset($user)    ? $user->user_id          : NULL;
    $user_id = isset($user_id) ? ','.$user_id.',user_id' : '';

    $team_id   = $this->input('team_id');
    $team_name = $this->input('team_name');

    $require_password  = ($this->method() === 'POST' ? 'required|' : '');
    $require_team_id   = 'required|';
    $require_team_name = 'required|';
    if (isset($team_id)) $require_team_name = '';
    else $require_team_id = '';
    $team_id = isset($team_id) ? '|exists:teams,team_id,team_id,'.$team_id : '';

    return [
      'username'    => 'required|string|max:128|unique:users,username'.$user_id,
      'email'       => 'required|email|max:128|unique:users,email'.$user_id,
      'password'    => $require_password.'string|confirmed|max:128',
      'firstname'   => 'required|string|max:64',
      'lastname'    => 'required|string|max:64',
      'image1'      => 'url|max:256',
      'image2'      => 'url|max:256',
      'description' => 'string',
      'is_active'   => 'boolean',
      'team_id'     => $require_team_id.'|integer'.$team_id,
      'team_name'   => $require_team_name.'|string|max:100'
    ];
  }
}
