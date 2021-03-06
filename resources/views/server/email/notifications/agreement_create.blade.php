<html>
<body>
<div style="background-color:#eee;background-image:none;background-repeat:repeat;background-position:top left;color:#333;font-family:Helvetica,Arial,sans-serif;line-height:1.25">
    <table border="0" cellpadding="0" cellspacing="0" height="100%" width="100%">
        <tbody>
        <tr>
            <td align="center" valign="top">
                <table border="0" cellpadding="20" cellspacing="0" width="600">
                    <tbody>
                    <tr>
                        <td align="center" valign="top">
                            <table border="0" cellpadding="0" cellspacing="0" height="90" width="100%"
                                   style="background-color:#ffffff;background-image:none;background-repeat:repeat;background-position:top left">
                                <tbody>
                                <tr>
                                    <td align="center" valign="middle">
                                        <a href="{{ env("APP_URL") }}">
                                            <img src="{{ env("APP_URL")."/logo.png" }}" width="200"
                                                 {{--height="142"--}}
                                                 alt="{{ __("default.site_name") }}"
                                                 style="margin: 10px 0;">
                                        </a>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td align="center" valign="top">
                            <table border="0" cellpadding="0" cellspacing="0" width="100%"
                                   style="background-color:#fff;background-image:none;background-repeat:repeat;background-position:top left">
                                <tbody>
                                <tr>
                                    <td align="center" valign="top">
                                        <table border="0" cellpadding="40" cellspacing="0" height="0" width="100%">
                                            <tbody>
                                            <tr>
                                                <td align="center" valign="middle">
                                                    <div>
                                                        <p style="font-size: 16px;">????????????????????????, {{ $name }}!</p>
                                                        <p style="font-size: 16px;">???? ?????????? <b>CCLTD.KZ</b> ?????? ????????????
                                                            ?????????????? <b>???{{ $number }}</b></p>
                                                        <p style="font-size: 16px;">???????????? ????????????????:
                                                            <b>{{ $status  }}</b></p>
                                                        <p style="font-size: 16px;">?????????????? ???????????? ???????????????? ?????????? ????????????
                                                            ?? ???????????? ????????????????, ?????? ?????????? ??????
                                                            ???????????????????? ?????????????? ???? <b><a
                                                                        href="{{ $link }}">????????????</a></b></p>
                                                        <p style="font-size: 16px;">???????????????????? ???? ????????????????, Capital
                                                            Consulting</p>
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
                    <tr>
                        <td align="center" valign="top">
                            <p style="text-transform: uppercase;color:#7f7f7f;font-size:12px;padding:20px 0">
                                ?? {{ date("Y") }} ccltd.kz</p>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </td>
        </tr>
        </tbody>
    </table>
</div>
</body>
</html>
