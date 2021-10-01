<x-layout>
    <x-slot name="title">
        ログイン
    </x-slot>
    <div class="form-box">
        <div>
            Login
        </div>
        <form>
            <table class="form-table">
                <tbody>
                    <tr>
                        <td>E-Mail Address</td>
                        <td><input type="text" name="email"></td>
                    </tr>
                    <tr>
                        <td>Password</td>
                        <td><input type="password" name="password"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td class="button">
                            <button>Login</button>
                            <span>Forgot Your Password?</span>
                        </td>
                    </tr>

                </tbody>
            </table>
        </form>
    </div>
</x-layout>
