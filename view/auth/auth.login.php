<?php require_once HEADER;
if(!isset($_SESSION)){session_start();}
if (isset($_SESSION['name']) && isset($_SESSION['role'])) {
    header("Location:index.php"); //redirijir
}else{
    require_once VAUTH . 'login.php';
}
?>
<div class="container">
    <div class="mx-auto card border-primary mb-3" style="max-width: 38rem;">
        <div class="card-header">Login</div>
        <div class="card-body text-primary">
<!--            <form action="index.php?type=auth&function=login" onsubmit="return validar()">-->
            <form action="index.php?type=auth&function=login" onSubmit=" return validar()" method="post">
                <div class="mb-3 row">
                    <label for="email" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="email" name="email" onchange="showOrDissmissAlert(this, false)">
                    </div>
                    <small class="alert-danger invisible w-75 ms-auto me-2 mt-2">El email no es valido</small>
                </div>
                <div class="mb-3 row">
                    <label for="password" class="col-sm-2 col-form-label">Password</label>
                    <div class="col-sm-10">
                        <input type="password" class="form-control" id="password" name="password" onchange="showOrDissmissAlert(this, false)">
                    </div>
                    <small class="alert-danger invisible w-75 ms-auto me-2 mt-2">el password debe contener letras mayusculas, minisculas,
                        numeros y caracteres especiales</small>
                </div>
                <div class="mb-3 row">
                    <div class="form-check ms-3">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            Mostrar contraseña
                        </label>
                    </div>
                </div>
                <div class="mb-3 row">
                    <center>
                        <div class="col-sm-6">
                            <button class="btn btn-outline-success w-100" type="submit">Inicar Sesión</button>
                        </div>
                    </center>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    const $ = (element) => document.querySelector(element);

    function validar() {
        var valido = true;
        const $email = $("#email");
        const $password = $("#password");
        //validacion del correo
        if (!validarEmail($email.value)) {
            showOrDissmissAlert($email, true);
            valido = false;
        } else {
            showOrDissmissAlert($email, false);
        }
        //validacion de la contraseña
        if ($password.value === "" || $password.value === null) {
            valido = false;
            showOrDissmissAlert($password, true);
        }
        return valido;
    }

    function validarEmail(email) {
        var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        return re.test(String(email).toLowerCase());
    }

    const showOrDissmissAlert = (element, show) => {
        element.style.border =  show ? "1px solid red" : "1px solid #ccc";
        const textsReplace = show ? ["invisible","alert"] :["alert","invisible"];
        const parentNode = element.parentNode;
        const $small = parentNode.nextElementSibling || parentNode.nextSibling;
        $small.className = $small.className.replaceAll(textsReplace[0], textsReplace[1]);
    };

    const $checkbox = $("#flexCheckDefault");
    const $password = $("#password");
    $checkbox.addEventListener("change", () => {
        $password.type = $checkbox.checked ? "text" : "password";
    });

    // const quitarAlerta = (element) => {
    //     element.style.border = "1px solid #ccc";
    //     const $small = element.nextElementSibling || element.nextSibling;
    //     $small.className = $small.className.replace(" alert ", " invisible");
    // };
</script>
<?php require_once FOOTER ?>