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
                                   style="background-color:#2D9CDB;background-image:none;background-repeat:repeat;background-position:top left">
                                <tbody>
                                <tr>
                                    <td align="center" valign="middle">
                                        <a href="{{ env('APP_URL') }}" style="font-size: 24px;color: #fff;text-decoration: none;">{{ env('APP_NAME','GNEXT') }}</a>
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
                                                        <p><b>????????????????????????!</b>
                                                        </p>
                                                        <p>?????? ???????????? ?????????????????? ?? ??????????, ???? {{$data['name']}}
                                                        </p>
                                                        <p>???????????????????? ????????????:<br>
                                                            E-mail: {{$data['email']}}<br>
                                                            ??????????????: {{$data['phone']}}<br>
                                                        </p>
                                                        <p>
                                                            ???????????? ???? ?????????????? ??????????????
                                                        </p>
                                                        {{--<p><a--}}
                                                        {{--href="{{url('/')}}/admin/order/{{$data}}"--}}
                                                        {{--target="_blank">?????????????? ?? ????????????</a>--}}
                                                        {{--</p>--}}
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
                            <p style="color:#7f7f7f;font-size:12px;padding:20px 0">
                                ?? {{ date('Y') }} {{ env('APP_NAME', 'SalemHokei.KZ') }}.
                                ??????
                                ?????????? ??????????????????.</p>
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
