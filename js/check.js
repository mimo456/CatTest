$(function () {
    //ボタンを押したら開始
    $(submitBotton).click(function () {

        let arr_checkBoxes = $(".checkBoxes");

        let alrtCount = 0;
        for (var i = 0; i < arr_checkBoxes.length; i++) {//何個チェックされてるかの確認
            if (arr_checkBoxes[i].checked) {
                alrtCount++;
            }
        }

        if (alrtCount < 5) {
            alert("選択肢を選んでください");
            return false;
        }
    });
});
