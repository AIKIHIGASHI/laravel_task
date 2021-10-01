<x-layout>
    <x-slot name="title">
        新規登録
    </x-slot>
    <div class="form-box">
        <div>
            Register
        </div>
        <form>
            <table class="form-table">
                <tbody>
                    <tr>
                        <td>Name</td>
                        <td><input type="text" name="name"></td>
                    </tr>
                    <tr>
                        <td>E-Mail Address</td>
                        <td><input type="text" name="email"></td>
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
