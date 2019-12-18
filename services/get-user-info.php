<form action="services/update-user-info.php" method="post">

    <h3>Name
        <input type="text" name="txtName" id="" value="<?php echo $user->cName ?>">
    </h3>
    <h3>Surname
        <input type="text" name="txtSurname" id="" value="<?php echo $user->cSurname ?>">
    </h3>
    <h3>Email:
        <input type="text" name="txtEmail" id="" value="<?php echo $user->cEmail ?>">
    </h3>
    <h3>Address:
        <input type="text" name="txtAddress" id="" value="<?php echo $user->cAddress ?>">
    </h3>
    <h3>City:
        <input type="text" name="txtCity" id="" value="<?php echo $user->cCityName ?>">
    </h3>
    <h3>Phone:
        <input type="text" name="txtPhone" id="" value="<?php echo $user->cPhonenumber ?>">
    </h3>
    <h3>Joined Frida:
        <input type="text" name="txtJoinDate" id="" value="<?php echo $user->dJoinDate ?>">
    </h3>
    <h3>
        <?php if (!empty($user->dCancelDate)) {
            echo "Cancel membership: <input type='text' name='txtCancelDate' id='' value='$user->dCancelDate'";
        } ?>
    </h3>
    <h3>Total Amount:
        <input type="text" name="txtTotalAmount" id="" value="<?php echo $user->nTotalAmount ?>">
        kr.
    </h3>

    <input type="submit" name="submit" value="Update">
</form>