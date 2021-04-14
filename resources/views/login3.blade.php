@extends('resources.views.layouts.appmaster')
@section('title', 'Login Page')
@section('content')


<form action="dologin3" method="post">
    <input type="hidden" name="_token" value="<?php echo csrf_token()?>">
    <h2>Login</h2>
    <table>
        <tr>
            <td>Username</td>
            <td><input type="text" name="username"/><?php echo $errors->first('username')?></td>
        </tr>
        <tr>
            <td>Password</td>
            <td><input type="text" name="password"/><?php echo $errors->first('password')?></td>
        </tr>
        <tr>
            <td colspan="2" align="center">
                <input type="submit" value="Login"/>
            </td>
        </tr>
    </table>
</form>

