<div class="pages benefit" id="divBenefit">
    <div class="containerS">
        <div class="left-benefit col-md-8">
            <div class="title-sub">
                Đặc quyền VIP
            </div>
            <div class="menu-benefit">
                <ul>
                    <li><a href="javascript:;" class="active" data-value="frmChangeZeni" data-tab="1">Đổi Zon</a></li>
                    <li><a href="javascript:;" data-value="frmShop" data-tab="2">Cửa hàng</a></li>
                    <li><a href="javascript:;" data-value="frmBirthdayGift" data-tab="3">Quà sinh nhật</a></li>
                    <li><a href="javascript:;" data-value="frmNewYearGift" data-tab="4">Quà tết</a></li>
                    <li><a href="javascript:;" data-value="frmAdvanceZeni" data-tab="5">Vay Zon</a></li>
                    <li><a href="javascript:;" data-value="frmHistory" data-tab="6">LSGD</a></li>
                </ul>
            </div>
            <div class="menu-benefit-mobile">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#menu-benefit" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <span class="title-menu-benefit">Đổi Zon</span>
                </div>
                <div id="menu-benefit" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li><a href="javascript:;" class="" data-value="frmChangeZeni" data-tab="1">Đổi Zon</a></li>
                        <li><a href="javascript:;" data-value="frmShop" data-tab="2">Cửa hàng</a></li>
                        <li><a href="javascript:;" data-value="frmBirthdayGift" data-tab="3">Quà sinh nhật</a></li>
                        <li><a href="javascript:;" data-value="frmNewYearGift" data-tab="4">Quà tết</a></li>
                        <li><a href="javascript:;" data-value="frmAdvanceZeni" data-tab="5">Vay Zon</a></li>
                        <li><a href="javascript:;" data-value="frmHistory" data-tab="6">LSGD</a></li>
                    </ul>
                </div>
            </div>
            <!-- end benefit mobile-->
            <div id="divBenefitContain"><div class="exchange-benefit">    <div class="col-md-6">        <p>Cấp độ hiện tại: <span class="vip-gold" id="levelCurrent">Chưa đăng nhập</span></p>        <p>Số dư VP đổi thưởng: <span class="t-vp" id="lbVpAward">0</span></p>        <div id="lbChangeZeniSucc" style="display:none">            <div style="width:100%;text-align:center" id="lbContent"></div>            <div class="btn-box" style="opacity: 0.3;">                <a href="javascript:;" class="btn-def" onclick="libBenefit.ChangeZeni.ContinuteChangeZeni();">                    Đổi tiếp                </a>            </div>        </div>        <div id="frmChangeZeni">            <p>Nhập số VP đổi thưởng:</p>            <div class="form-exchange">                <input type="number" placeholder="Nhập số VP" id="txtAmountExchange" disabled="disabled">            </div>            <p>Số ZON nhận được <span class="t-vp"><label id="lbZeniReceive">0</label>  <img src="Content/images/favicon.png" alt="" width="18"></span></p>            <div class="form-exchange">                <select id="slOTP" onchange="libBenefit.ChangeZeni.OnChangeslOTP(this);">                    <option value="1">SMS OTP</option>                    <option value="2">APP OTP</option>                </select>                <input type="text" placeholder="Nhập mã OTP" maxlength="10" id="txtOTP" disabled="disabled">            </div>            <p>(Soạn tin <strong>ZON OTP</strong> gửi <strong>8095</strong> hoặc <strong>8100</strong>)</p>            <div class="warning-box" id="divWarning-box">Bạn cần đăng nhập để sử dụng tính năng này</div>            <div class="form-exchange" id="divCaptcha" style="display:none;">                <div class="label"><label for="captcha">Mã xác thực</label></div>                <div class="input">                    <input onkeyup="this.value = this.value.toUpperCase();" type="text" id="captcha" maxlength="10" style="width:35%">                    <span class="captcha-img">                        <img id="imgcaptcha" src="" alt="">                        <input type="hidden" id="hiddVerify">                    </span>                    <span class="btn-reload-captcha" onclick="libBenefit.ChangeZeni.GetCaptcha();"></span>                </div>            </div>            <div class="btn-box" style="opacity: 0.3;">                <a href="javascript:;" class="btn-def">                    Đổi ZON                </a>            </div>        </div>    </div>    <div class="col-md-6">        <p><strong>Tỷ lệ quy đổi ZON</strong></p>        <div class="detailbenefit-table">            <table class="table table-bordered">                <thead>                    <tr class="title-table">                        <th>Cấp độ</th>                        <th>Giá trị 1 VP</th>                    </tr>                </thead>                <tbody id="tbListRate"><tr><td><span class="vip-stone">Đá</span></td><td><span class="t-vp">0 <img src="Content/images/favicon.png" alt="" width="18"> </span></td></tr><tr><td><span class="vip-bronze">Đồng</span></td><td><span class="t-vp">300 <img src="Content/images/favicon.png" alt="" width="18"> </span></td></tr><tr><td><span class="vip-silver">Bạc</span></td><td><span class="t-vp">600 <img src="Content/images/favicon.png" alt="" width="18"> </span></td></tr><tr><td><span class="vip-gold">Vàng</span></td><td><span class="t-vp">800 <img src="Content/images/favicon.png" alt="" width="18"> </span></td></tr><tr><td><span class="vip-diamond">Bạch kim</span></td><td><span class="t-vp">1.000 <img src="Content/images/favicon.png" alt="" width="18"> </span></td></tr><tr><td><span class="vip-platinum">Kim cương</span></td><td><span class="t-vp">1.400 <img src="Content/images/favicon.png" alt="" width="18"> </span></td></tr><tr><td><span class="vip-super">Siêu VIP</span></td><td><span class="t-vp">1.400 <img src="Content/images/favicon.png" alt="" width="18"> </span></td></tr></tbody>            </table>        </div>        <p>Hạng VIP càng cao, Zon nhận được càng nhiều. VP đổi thưởng sẽ bị reset vào 00h ngày đầu tiên của tháng tiếp theo. Bạn cần đổi thưởng trước thời gian này.</p>    </div></div></div>

        </div>
        <!-- end left benefit-->
            <div class="right-benefit col-md-4">
        <div class="tab-right-vip">
            <ul>
                <li class="active" data-value="1"><a href="javascript:;" onclick="libMenu.BindDataMenuRight(5);">Vinh danh</a></li>
                <li><a href="javascript:;" data-value="2">Top quà tặng</a></li>
            </ul>
        </div>
        <div class="list-right-vip" id="divTopVip"><ul><li><strong>JP.NOHU </strong>đổi VP thành công <span class="t-cygan">(Từ 11 VP sang 3.300 ZON)</span> <span class="t-grey"> 54 giây trước</span></li><li><strong>zznhokzz091994 </strong>đổi VP thành công <span class="t-cygan">(Từ 21 VP sang 6.300 ZON)</span> <span class="t-grey"> 1 phút, 9 giây trước</span></li><li><strong>GOSTH </strong>đổi VP thành công <span class="t-cygan">(Từ 291 VP sang 174.600 ZON)</span> <span class="t-grey"> 2 phút, 50 giây trước</span></li><li><strong>Luoi_lao_dieu </strong>đổi VP thành công <span class="t-cygan">(Từ 10 VP sang 3.000 ZON)</span> <span class="t-grey"> 3 phút, 7 giây trước</span></li><li><strong>cannabisk2 </strong>đổi VP thành công <span class="t-cygan">(Từ 13 VP sang 3.900 ZON)</span> <span class="t-grey"> 4 phút, 9 giây trước</span></li></ul></div>
        <div class="list-right-vip" id="divGift" style="display:none;">
            <ul>
                <li>Comming soon</li>
            </ul>
        </div>
    </div>
<script>
    $(document).ready(function () {
        libMenu.BindDataMenuRight(5);
    });
</script>

        <!-- end right benefit-->
    </div>
</div>