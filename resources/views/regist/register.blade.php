<x-layout>
    <x-slot name="title">
        新規登録
    </x-slot>
    <div class="form-box">
        <div>
            Register
        </div>
        <form method="post" action="{{route('register.store')}}">
            @csrf
            <table class="form-table">
                @if($errors->any())
                <ul class="error-box">
                    @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                    @endforeach
                </ul>
                @endif
                <tbody>
                    <tr>
                        <td>Name</td>
                        <td><input type="text" name="name" value="{{old('name')}}"></td>
                    </tr>
                    <tr>
                        <td>E-Mail Address</td>
                        <td><input type="text" name="email" value="{{old('email')}}"></td>
                    </tr>
                    <tr>
                        <td>Password</td>
                        <td><input type="password" name="password"></td>
                    </tr>
                    <tr>
                        <td>Confirm Password</td>
                        <td><input type="password" name="password_confirmation"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td class="button"><button>Register</button></td>
                    </tr>
                </tbody>
            </table>
        </form>
    </div>
</x-layout>
