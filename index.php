<!DOCTYPE html>
<html>
<head>
    <script type="application/javascript" src="js/jquery-3.3.1.js"></script>
    <script type="application/javascript" src="js/webtoolkit.base64.js"></script>
    <script>
        var x = ["18 Nguyễn Đức Thuận, Phường 13, Tân Bình, HCM, VN",
            "15 Đường số 51, Tân Tạo, Bình Tân, HCM, VN",
            "Số 3 Đường 52 KP9, Tân Tạo, Bình Tân, HCM, VN",
            "117/21A Hồ Văn Long (nối dài), Khu phố 3, Tân Tạo, Bình Tân, HCM, VN",
            "Số 1560/55 Tỉnh lộ 10, khu phố 2, Tân Tạo, Bình Tân, HCM, VN",
            "Số 15  Đường 40B, Khu phố 8, Tân Tạo, Bình Tân, HCM, VN",
            "271/19 Lê Đình Cẩn, Tân Tạo, Bình Tân, HCM, VN",
            "Số 42, Đường số 53C, Tân Tạo, Bình Tân, HCM, VN",
            "45/10/6 Lê Đình Cẩn, Tân Tạo, Bình Tân, HCM, VN",
            "121A Lê Đình Cẩn, Khu phố 6, Tân Tạo, Bình Tân, HCM, VN",
            "1618 Tỉnh lộ 10, Khu phố 2, Tân Tạo, Bình Tân, HCM, VN",
            "39-41 Lê Đình Cẩn, KP7, Tân Tạo, Bình Tân, HCM, VN",
            "65 Đường Số 57, Tân Tạo, Bình Tân, HCM, VN",
            "10 - 12 Đường 53, Tân Tạo, Bình Tân, HCM, VN",
            "951/19 Đường 38A, Tân Tạo, Bình Tân, HCM, VN",
            "Số 21, Đường 40B, Khu phố 8, Tân Tạo, Bình Tân, HCM, VN",
            "Số 1618 Tỉnh lộ 10, Tân Tạo, Bình Tân, HCM, VN",
            "Số 117/9/3A Hồ Văn Long, Khu phố 3, Tân Tạo, Bình Tân, HCM, VN",
            "129/14D Lê Đình Cẩn, Khu phố 6, Tân Tạo, Bình Tân, HCM, VN",
            "7 Đường 55B, Tân Tạo, Bình Tân, HCM, VN",
            "936/2 Tỉnh Lộ 10, Khu phố 7, Tân Tạo, Bình Tân, HCM, VN",
            "43 Đường số 50, Tân Tạo, Bình Tân, HCM, VN",
            "130/38B, đường Lê Đình Cẩn, Tân Tạo, Bình Tân, HCM, VN",
            "45/10/8 Lê Đình Cẩn, Khu Phố 7, Tân Tạo, Bình Tân, HCM, VN",
            "25 Võ Văn Vân, Tân Tạo, Bình Tân, HCM, VN",
            "147/1Q Lê Đình Cẩn, Khu phố 6, Tân Tạo, Bình Tân, HCM, VN",
            "156/13/2/19 Lê Đình Cẩn, Tân Tạo, Bình Tân, HCM, VN",
            "242/16/21 Lê Đình Cẩn, Khu phố 10, Tân Tạo, Bình Tân, HCM, VN",
            "Số 56 Đường 55, Khu phố 9, Tân Tạo, Bình Tân, HCM, VN",
            "18/9 Hồ Văn Long, khu phố 4, Tân Tạo, Bình Tân, HCM, VN",
            "184/28/15 Lê Đình Cẩn, Tân Tạo, Bình Tân, HCM, VN",
            "117/2D1 Hồ Văn Long, Khu Phố 3, Tân Tạo, Bình Tân, HCM, VN",
            "220 Lê Đình Cẩn, Tân Tạo, Bình Tân, HCM, VN",
            "173/11/36 Lê Đình Cẩn, Tân Tạo, Bình Tân, HCM, VN",
            "111/37G Lê Đình Cẩn, Tân Tạo, Bình Tân, HCM, VN",
            "67 Đường 57, Tân Tạo, Bình Tân, HCM, VN",
            "130/35C Lê Đình Cẩn, Khu Phố 10, Tân Tạo, Bình Tân, HCM, VN",
            "Số 15 Đường 40B, Khu phố 8, Tân Tạo, Bình Tân, HCM, VN",
            "Số 81 Đường số 55, Khu phố 9, Tân Tạo, Bình Tân, HCM, VN",
            "Số 81 Đường Số 55, Khu phố 9, Tân Tạo, Bình Tân, HCM, VN",
            "270/1/3B Lê Đình Cẩn, Tân Tạo, Bình Tân, HCM, VN",
            "28B Võ Văn Vân, Khu phố 1, Tân Tạo, Bình Tân, HCM, VN",
            "933/4/3 Tỉnh Lộ 10, Tân Tạo, Bình Tân, HCM, VN",
            "Số 74 Đường 46, Khu Phố 8, Tân Tạo, Bình Tân, HCM, VN",
            "Số 36 đường số 52, Tân Tạo, Bình Tân, HCM, VN",
            "164 Lê Đình Cẩn, Tân Tạo, Bình Tân, HCM, VN",
            "35 Lê Đình Cẩn, Khu Phố 7, Tân Tạo, Bình Tân, HCM, VN",
            "Số 1175/2 Tỉnh lộ 10, Khu phố 8, Tân Tạo, Bình Tân, HCM, VN",
            "74 Đường 53B, Tân Tạo, Bình Tân, HCM, VN",
            "81 Đường 55, Tân Tạo, Bình Tân, HCM, VN",
            "12 Đường 46, Tân Tạo, Bình Tân, HCM, VN"];

        var arrayList = [];

        getData(2499);

        for(var i = 0; i < x.length; i++) {
            arrayList[i] = [];
        }

        var total = x.length * x.length;

        function getData(index) {
            if(index >= total ) {
                showResult()
                return;
            }

            var m = Math.trunc(index / x.length);
            var n = index % x.length;

            var url = initUrl(m, n);

            $.getJSON("get.php?url=" + url, function (data) {
                arrayList[index] = [];

                try {
                    var length = Math.trunc(data.route.distance * 1000)
                    arrayList[m][n] = length;
                    $("body").html("Đang duyệt lộ trình thứ: " + index + "/" + total + "<br/><br/>Đường đi từ: " + x[m] + "<br/><br/>đến: " + x[n] + "<br/><br/>Lộ trình dài: " + length + "m");
                    index++;
                } catch (e) {
                    index--;
                    console.log(e)
                }
                getData(index);
            });
        }

        function initUrl(m, n) {
            var url = "http://www.mapquestapi.com/directions/v2/route?key=HLK8R7RfDIgemPL7eXXcFaK8fC11AHex&from=" + x[m] + "&to=" + x[n] + "&unit=k";
            console.log(url);
            return url;
        }

        function showResult() {
            $("body").html("");
            for(var i = 0; i < x.length; i++) {
                for (var j = 0; j< x.length; j++) {
                    $("body").html($("body").html() + "    " + arrayList[i][j]);
                }
                $("body").html($("body").html() + "<br/>");
            }
        }
    </script>
</head>
<body>

</body>
</html>