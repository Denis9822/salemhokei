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
                                        <a href="{{ env('APP_URL') }}">
                                            <img src="{{ env('APP_URL').'/assets/img/logo.png' }}" width="200"
                                                 height="142"
                                                 alt="VI Спартакиада среди работников Группы компаний АО «Самрук-Қазына»"
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
                                                        <p style="color: #7f7f7f; font-size: 16px; line-height: 1.2;">
                                                            Уведомляем, что статус вашей заявки был
                                                            изменен на
                                                            @if($status == 1)
                                                                <b>"Одобрено"</b>
                                                            @elseif($status == 2)
                                                                <b>"Отклонено"</b>
                                                            @else
                                                                <b>"На рассмотрении"</b>
                                                            @endif
                                                        </p>
                                                        @if($members)
                                                            <br>
                                                            @foreach($members as $iin => $number)
                                                                <p style="color: #7f7f7f; font-size: 16px; line-height: 1.2;">
                                                                    ИИН участника: <strong
                                                                            style="font-weight: bold;">{{ $iin }}</strong><br>
                                                                    Номер участника: <strong
                                                                            style="font-weight: bold;">{{ $number }}</strong>
                                                                </p>
                                                                <br>
                                                            @endforeach
                                                        @endif
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
                                © {{ date('Y') }} Samruk-Kazyna.kz</p>
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
