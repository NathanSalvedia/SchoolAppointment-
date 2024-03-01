@extends('layouts.main')

<div class="auth-wrapper d-flex my-5 py-5">
    <div class="col-md-4 m-auto">
        <div class="bg-light shadow p-3 mb-5 bg-body-tertiary rounded">
            <p class="h1 text-center p-4 ">Sign up</p>

            <div class=" px-4 pt-4">

                <form class="container">
                <p class="h1 text-center p-4 font-weight-bold">Login</p>
                <form class="container">
                 <div class=" mb-5">
                    <label for="email" class="form-text form-label"></label>
                    <input type="text" placeholder="Email:" class="form-control  form-control-lg" id="email" name="email" />
                 </div>

                 <div class=" mb-5">
                    <label for="password" class="form-text form-label"></label>
                    <input type="password"  class="form-control form-control-lg" placeholder="Password" id="password" name="password" />
                 </div>

                 <div class="mb-5 d-flex justify-content-between">
                    <a clas href="#" class="text-form text-reset"> Forgot Password?</a>
                 </div>

                 <div class="mt-5 mb-4 d-grid">
                    <button type="submit" class="btn btn-block btn-secondary form-control form-control-lg">Login</button>
                 </div>
                </form>
            </div>
        </div>
    </div>
    </div>

