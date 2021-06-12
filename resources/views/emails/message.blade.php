<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>

    {{--Envió de imagen para el correo --}}
    {{-- <tbody>
        <tr>
            <td>
                <table width="100%" cellspacing="0" cellpadding="0" border="0">
                    <tbody>
                        <tr>
                            <td align="center" class="bmeImage" style="border-collapse: collapse; padding: 0px;">
                                 <img src="../../public/img/logo.png"
                                    class="mobile-img-large"
                                    width="600"
                                    style="max-width: 1200px; display: block; width: 600px;"
                                    alt=""
                                    border="0">
                            </td>
                        </tr>
                    </tbody>
                </table>
            </td>
        </tr>
    </tbody> --}}
    {{-- <div id="dv_4" class="blk_wrapper" style="">
        <table width="600" cellspacing="0" cellpadding="0" border="0" class="blk" name="blk_text">
            <tbody>
                <tr>
                    <td>
                        <table cellpadding="0" cellspacing="0" border="0" width="100%" class="bmeContainerRow">
                            <tbody>
                                <tr>
                                    <td class="tdPart" valign="top" align="center">
                                        <table cellspacing="0" cellpadding="0" border="0" width="600" name="tblText"
                                            style="float:left; background-color:transparent;" align="left"
                                            class="tblText">
                                            <tbody>
                                                <tr>
                                                    <td valign="top" align="left" name="tblCell"
                                                        style="padding: 5px 20px; font-family: Arial, Helvetica, sans-serif; font-size: 14px; font-weight: 400; color: rgb(56, 56, 56); text-align: left;"
                                                        class="tblCell">
                                                        <div style="line-height: 200%; text-align: center;">
                                                            <span
                                                                style="font-size: 14px; font-family: Georgia, Palatino; color: #666666; line-height: 200%;">
                                                                <em>

    <h1> Mensaje recibido de {{ $name }} </h1>
    <p><b>Nombre:</b> {{ $name }}</p>
    <p><b>Email:</b> {{ $email }}</p>
    <p><b>Asunto:</b> {{ $subject }}</p>
    <p> {{ $body }}</p>
    {{-- </em></span>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
            </tbody>
        </table>
    </div> --}}

    <h1> Mensaje recibido de {{ $name }} </h1>
    <p><b>Nombre:</b> {{ $name }}</p>
    <p><b>Apellido:</b> {{ $last_name }}</p>
    <p><b>Tipo Documento:</b> {{ $document_type }}</p>
    <p><b>Documento:</b> {{ $document }}</p>
    <p><b>Email:</b> {{ $email }}</p>
    <p><b>Asunto:</b> {{ $subject }}</p>
    <p><b>Teléfono:</b> {{ $phone }}</p>
    <p> {{ $body }}</p>
     </em></span>
</body>

</html>
