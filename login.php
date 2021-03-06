<!DOCTYPE html>
<html>

<head>
    <?php include 'head.php' ?>
    <title>Login</title>
    <style>
        form {
            position: relative;
        }

        form img {
            width: 100%;
            display: block;
            z-index: 4;
        }

        .table {
            width: max-content;
            border: 1px solid white;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            z-index: 5;
        }

        #row {
            width: 100%;
            margin: 0;
            padding: 0;
        }
    </style>
</head>

<body>
    <?php
    if (isset($_POST["btnlogin"])) {
        extract($_POST);
        $q = pg_query("select * from tbcustomer where cemail='$txtemail' and cpass='$txtpass'");
        if (pg_num_rows($q) > 0) {
            $_SESSION['cemail'] = $txtemail;
            $q1 = pg_query("select * from tbcustomer where cemail='" . $_SESSION['cemail'] . "'");
            $r1 = pg_fetch_array($q1);
            $_SESSION['custid'] = $r1['custid'];
            $_SESSION['cname'] = $r1['cname'];
            $_SESSION['caddr'] = $r1['caddr'];
            $_SESSION['ccon'] = $r1['ccon'];
            header("location:welcome.php");
        } else {
    ?>
            <script type="text/javascript">
                alert("Invalid Credentials");
            </script>
    <?php
        }
    }
    ?>
    <?php include 'menu.php' ?>

    <div class="row">
        <form method="post">
            <img src="proimages/newwelcome.png">
            <table class="table">
                <tr>
                    <td style="color: white;">Email</td>
                    <td><input type="text" required pattern="[a-z]+[0-9]*@[a-z]+[0-9]*\.[a-z]{2,3}" name="txtemail" class="form-control"></td>
                </tr>
                <tr>
                    <td style="color: white;">Password</td>
                    <td><input type="password" required name="txtpass" class="form-control"></td>
                </tr>
                <tr>
                    <Td colspan=2 align="center">
                        <input type="submit" class="btn btn-success" name="btnlogin" value="Sign In">
                    </Td>
                </tr>
            </table>
        </form>
    </div>

    <?php include 'footer.php' ?>
</body>

</html>