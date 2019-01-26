<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>FIANGONANA ANISOZATO HEBRONA</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="RAJAONARILALA Aymard">
    <link href="../assets/img/AHebrona.png" rel="icon">
    <!-- Le styles -->
    <link href="../assets/css/bootstrap.css" rel="stylesheet">
    <link href="../assets/css/login.css" rel="stylesheet">

    <script type="text/javascript" src="http://code.jquery.com/jquery-latest.js"></script>

    <style type="text/css">
        body {
            padding-top: 30px;
        }
    </style>

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Google Fonts call. Font Used Open Sans & Raleway -->
    <link href="http://fonts.googleapis.com/css?family=Raleway:400,300" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" type="text/css">

    <!-- Jquery Validate Script -->
    <script type="text/javascript" src="js/jquery.validate.js"></script>

    <!-- Jquery Validate Script - Validation Fields -->
    <script type="text/javascript">
        $.validator.setDefaults({
            submitHandler: function () {
                window.open('dashboard.html', '_self', false)
            }
        });

        $().ready(function () {
            // validate the comment form when it is submitted
            $("#commentForm").validate();

            // validate signup form on keyup and submit
            $("#signupForm").validate({
                rules: {
                    firstname: "required",
                    lastname: "required",
                    username: {
                        required: true,
                        minlength: 1
                    },
                    password: {
                        required: true,
                        minlength: 1
                    },
                    confirm_password: {
                        required: true,
                        minlength: 2,
                        equalTo: "#password"
                    },
                    email: {
                        required: true,
                        email: true
                    },
                    topic: {
                        required: "#newsletter:checked",
                        minlength: 2
                    },
                    agree: "required"
                },
                messages: {
                    firstname: "Please enter your firstname",
                    lastname: "Please enter your lastname",
                    username: {
                        required: "Please enter a username",
                        minlength: "Your username must consist of at least 1 character"
                    },
                    password: {
                        required: "Please provide a password",
                        minlength: "Your password must be at least 1 character long"
                    },
                    confirm_password: {
                        required: "Please provide a password",
                        minlength: "Your password must be at least 5 characters long",
                        equalTo: "Please enter the same password as above"
                    },
                    email: "Please enter a valid email address",
                    agree: "Please accept our policy"
                }
            });

            // propose username by combining first- and lastname
            $("#username").focus(function () {
                var firstname = $("#firstname").val();
                var lastname = $("#lastname").val();
                if (firstname && lastname && !this.value) {
                    this.value = firstname + "." + lastname;
                }
            });

            //code to hide topic selection, disable for demo
            var newsletter = $("#newsletter");
            // newsletter topics are optional, hide at first
            var inital = newsletter.is(":checked");
            var topics = $("#newsletter_topics")[inital ? "removeClass" : "addClass"]("gray");
            var topicInputs = topics.find("input").attr("disabled", !inital);
            // show when newsletter is checked
            newsletter.click(function () {
                topics[this.checked ? "removeClass" : "addClass"]("gray");
                topicInputs.attr("disabled", !this.checked);
            });
        });
    </script>

</head>
<body>
<div class="container">
    <div class="row">
        <div class="block-unit col-lg-offset-4 col-lg-4" style="margin-top:100px">
            <div class="panel panel-primary"
                 style="text-align:center; padding:8px 8px 8px 8px; background: rgba(0, 0, 0, 0.4); *background-color: #222!important;">
                <div class="panel-heading"
                     style="margin-left:4px; background-image: url('../assets/img/Logo.png'); background-size:100% 95%;  background-repeat: no-repeat; ">
                    <div class="row">
                        <div class="col-xs-3">
                            <i class="fa fa-comments fa-5x"></i>
                        </div>
                        <div class="col-xs-9 text-left">
                            <div class="huge">&nbsp;</div>
                            <div>&nbsp;&nbsp;&nbsp;</div>
                        </div>
                    </div>
                </div>
                <div class="panel-body">

                    <div class="row" style="text-align:center;padding:8px 8px 8px 8px;">
                        <div class="col-lg-12">
                            <form action="login" method="post">
                                <fieldset>
                                    <p>
                                        <input autocomplete="off" id="username" name="username" type="text"
                                               placeholder="Anarana famantarana">
                                        <input id="password" name="password" type="password" placeholder="Teny miafina">
                                    </p>
                                    <input class="submit btn-default btn btn-large" type="submit" value="Hiditra">
                                </fieldset>
                            </form>
                        </div>
                    </div>

                </div>

                <a href="#">
                    <div class="panel-footer" style="text-align:center; padding:8px 8px 8px 8px;">
                        <span class="pull-left"></span>
                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>

                        <div class="clearfix error">
                            <?php if(isset($message)) : ?>
                                <?php echo $message; ?>
                            <?php endif; ?></div>
                    </div>
                </a>
            </div>
        </div>


    </div>
</div>


<!-- Le javascript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script type="text/javascript" src="../assets/js/bootstrap.js"></script>


</body>
</html>