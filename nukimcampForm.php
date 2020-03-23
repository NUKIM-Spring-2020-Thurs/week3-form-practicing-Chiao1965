<!DOCTYPE html>
<html lang="en">
<style> 

</style>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NUKIM CAMP</title>
</head>

<body>
    <form action = "nukimcampFormSub.php" method = "POST">
        <p>
            請輸入您的姓名 : <input type = "text" placeholder = "王小明" name = "username"> <br/>
        </p>
        <p>
            請選擇您的性別 : <br/>
                男<input type = radio name = "gender" value = "M"> 
                女<input type = radio name = "gender" value = "F">
            <br/>   
        </p>
        <p> 
            請輸入您的出生年月日 : <input type = "date" name = "birthday"> <br/>
        </p>
        <p> 
            請輸入您的身分證字號 : <input type = "text" placeholder = "A123456789" name = "id"> </br>
        </p>
        <p> 
            請輸入您的聯絡電話 : <input type = "tel" placeholder = "0912345678" name = "phonenumber"> </br>
        </p>
        <p> 
            請輸入您的信箱 : <input type = "email" name = "email">
        </p>
        <p>
            請選擇您的居住縣市 : <select name = "city[]" multiple> 
                <option value = "Keelung"> 基隆 </option>
                <option value = "New Taipei"> 新北 </option>
                <option value = "Taipei"> 台北 </option>
                <option value = "Yilan"> 宜蘭 </option>
                <option value = "Taoyuan"> 桃園 </option>
                <option value = "Hsinchu"> 新竹 </option>
                <option value = "Miaoli"> 苗栗 </option>
                <option value = "Taichung"> 台中 </option>
                <option value = "Changhua"> 彰化 </option>
                <option value = "Nantou"> 南投 </option>
                <option value = "Yunlin"> 雲林 </option>
                <option value = "Chiayi"> 嘉義 </option>
                <option value = "Tainan"> 台南 </option>
                <option value = "Kaohsiung"> 高雄 </option>
                <option value = "Pingtung"> 屏東 </option>
                <option value = "Taitung"> 台東 </option>
                <option value = "Hualien"> 花蓮 </option>
                <option value = "Penghu"> 澎湖 </option>
                <option value = "Kinmen"> 金門 </option>
                <option value = "Lienchiang"> 連江 </option>
            </select> 
        </p>
        <p> 
            請輸入您就讀的高中 : <input type = "text" placeholder = "台南女中" name = "highschool"> </br>
        </p>
        <!-- <p> 
            請上傳您的家長同意書 : <input type = "file" name = "agreement"> </br>
        </p> -->
        <p> 
            請選擇您的飲食偏好家 : </br>
                葷<input type = radio name = "meal" value = "Carnivore">
                蛋奶素<input type = radio name = "meal" value = "vegetarian">
                純素<input type = radio name = "meal" value = "Vegan">
        </p>
        <p>
            請問您是否有特殊疾病史 : </br>
                沒有<input type = radio name = "historyOfIllness" value = "no">
                有<input type = radio name = "historyOfIllness" value = "yes"> </br>
                若有，請在下方說明 : </br>
                <textarea rows = "5" cols = "100" name = "describe"> </textarea>
        </p>
        <p>
            <textarea rows = "20" cols = "100" name = "comment">
            若有其他特殊需求，請在這裡告訴我們
            </textarea>
        </p>
        <input type = "reset" value = "Clear"> <input type = "submit" value = "Sand Data">
    </form>
</body>
</html>