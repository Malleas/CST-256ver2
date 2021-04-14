<form action="whoami" method="post">
    <input type="hidden" name="_token" value="<?php echo csrf_token()?>">
    <h2>What's Your Name?</h2>
    <table>
        <tr>
            <td>First Name</td>
            <td><input type="text" name="firstName"/></td>
        </tr>
        <tr>
            <td>Last Name</td>
            <td><input type="text" name="lastName"/></td>
        </tr>
        <tr>
            <td colspan="2" align="center">
                <input type="submit" value="Ask Now"/>
            </td>
        </tr>
    </table>
</form>
