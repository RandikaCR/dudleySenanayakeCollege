<table class="body-wrap" width="600" style="font-family: 'Roboto', sans-serif; box-sizing: border-box; font-size: 14px; width: 600px; background-color: transparent; margin: 0;">
    <tr style="font-family: 'Roboto', sans-serif; box-sizing: border-box; font-size: 14px; margin: 0;">
        <td class="container" width="600" style="font-family: 'Roboto', sans-serif; box-sizing: border-box; font-size: 14px; display: block !important; max-width: 600px !important; clear: both !important;" valign="top">
            <div class="content" style="font-family: 'Roboto', sans-serif; box-sizing: border-box; font-size: 14px; max-width: 600px; display: block; margin: 0 auto; padding: 20px;">
                <table class="main" width="100%" cellpadding="0" cellspacing="0" itemprop="action" itemscope itemtype="http://schema.org/ConfirmAction" style="font-family: 'Roboto', sans-serif; box-sizing: border-box; font-size: 14px; border-radius: 3px; margin: 0; border: none;">
                    <tr style="font-family: 'Roboto', sans-serif; font-size: 14px; margin: 0;">
                        <td class="content-wrap" style="font-family: 'Roboto', sans-serif; box-sizing: border-box; color: #495057; font-size: 14px; vertical-align: top; margin: 0;box-shadow: 0 3px 15px rgba(30,32,37,.06); ;border-radius: 7px; background-color: #fff;overflow: hidden;" valign="top">
                            <meta itemprop="name" content="Confirm Email" style="font-family: 'Roboto', sans-serif; box-sizing: border-box; font-size: 14px; margin: 0;" />
                            <div style="padding: 20px;box-sizing: border-box; text-align: center; background: #670c10;">
                                <img src="https://www.dudleysenanayakecollege.lk/assets/common/images/footer-logo.png" alt="" height="25">
                            </div>

                            <style type="text/css">
                                .order-table th,
                                .order-table td{
                                    border: 1px solid #ccc;
                                }
                            </style>

                            <div style="padding: 0px 20px 0px 20px;box-sizing: border-box; text-align: left;mso-padding-alt: 0px 20px 0px  20px;">

                                <p style="font-family: 'Roboto', sans-serif;font-weight: 600;">Hello {{ $data['name'] }}</p>
                            </div>

                            <div style="padding: 10px 20px 40px 20px;box-sizing: border-box; text-align: center;mso-padding-alt:  10px 20px 40px 20px;">

                                <h4 style="font-family: 'Roboto', sans-serif;margin-bottom: 10px;font-weight: 600;">Thank you for your contact us</h4>

                                <table style="margin: 20px 0 0 0; border: 1px solid #cccccc; width: 100%;">
                                    <tr>
                                        <td style="text-align:left; margin: 0 0 10px 0; border-bottom: 1px solid #cccccc; padding: 10px; mso-padding-alt: 10px; color: #999999;">Name:</td>
                                        <td style="text-align:left; margin: 0 0 10px 0; border-bottom: 1px solid #cccccc; padding: 10px; mso-padding-alt: 10px;">{{ $data['name'] }}</td>
                                    </tr>
                                    <tr>
                                        <td style="text-align:left; margin: 0 0 10px 0; border-bottom: 1px solid #cccccc; padding: 10px; mso-padding-alt: 10px; color: #999999;">Email:</td>
                                        <td style="text-align:left; margin: 0 0 10px 0; border-bottom: 1px solid #cccccc; padding: 10px; mso-padding-alt: 10px;">{{ $data['email'] }}</td>
                                    </tr>
                                    <tr>
                                        <td style="text-align:left; margin: 0 0 10px 0; border-bottom: 1px solid #cccccc; padding: 10px; mso-padding-alt: 10px; color: #999999;">Message:</td>
                                        <td style="text-align:left; margin: 0 0 10px 0; border-bottom: 1px solid #cccccc; padding: 10px; mso-padding-alt: 10px;">{{ $data['message'] }}</td>
                                    </tr>
                                    <tr>
                                        <td style="text-align:left; margin: 0 0 10px 0; padding: 10px; mso-padding-alt: 10px; color: #999999;">Sent at:</td>
                                        <td style="text-align:left; margin: 0 0 10px 0; padding: 10px; mso-padding-alt: 10px;">{{ $data['time'] }}</td>
                                    </tr>
                                </table>


                            </div>

                            <div style="padding: 20px;box-sizing: border-box; text-align: center; background-color: #670c10;">
                                <h6 style="font-family: 'Roboto', sans-serif;margin: 0; font-size: 15px;color: #fff;"><a href="mailto:info@dudleysenanayakecollege.lk" style="color: #fff; text-decoration: none;">info@dudleysenanayakecollege.lk</a></h6>
                            </div>
                            <div style="padding: 20px;box-sizing: border-box; text-align: center;">
                                <p style="font-family: 'Roboto', sans-serif;margin: 0px 0px 5px 0px;font-weight: 500;color: #98a6ad;">Dudley Senanayake College.</p>
                                <p style="font-family: 'Roboto', sans-serif;margin: 0px 0px 2px 0px;font-weight: 500;color: #98a6ad;">Park Road</p>
                                <p style="font-family: 'Roboto', sans-serif;margin: 0px 0px 2px 0px;font-weight: 500;color: #98a6ad;">Colombo 05</p>
                                <p style="font-family: 'Roboto', sans-serif;margin: 0px 0px 2px 0px;font-weight: 500;color: #98a6ad;">00500</p>
                            </div>
                        </td>
                    </tr>
                </table>
                <div style="text-align: center; margin: 28px auto 0px auto;">
                    <p style="font-family: 'Roboto', sans-serif; font-size: 14px;color: #98a6ad; margin: 0px 0px 5px 0px;">{{ date('Y', time()) }} admin @ dudleysenanayakecollege.lk. All rights reserved.</p>
                </div>
            </div>
        </td>
    </tr>
</table>
