

function showFormFront() {
    var content_type = document.getElementById('section_content_type_front');
    var twoInputLabelValue = document.getElementById('twoInputLabelValue_front');
    var labelValue = document.getElementById('labelValue_front');
    var oneInputFliedMedia  = document.getElementById('oneInputFieldMedia_front');
    var oneInputFormText = document.getElementById('oneInputFormText_front');
    var oneInputFormMedia = document.getElementById('oneInputFormMedia_front');
    var twoInputForm = document.getElementById('twoInputForm_front');
    var twoInputField = document.getElementById('twoInputField_front');
    var oneInput = document.getElementById('oneInput_content_type_id_front');
    var twoInput = document.getElementById('twoInput_content_type_id_front');

    if (content_type.value == 1) {
        oneInput.value = 1;
        console.log(oneInput.value);
        oneInputFormText.style.display = 'block';
        oneInputFormMedia.style.display = 'none';
        twoInputForm.style.display = 'none';
    } else if (content_type.value == 2) {
        oneInput.value = 2;
        console.log(oneInput.value);
        oneInputFormMedia.style.display = 'block';
        oneInputFormText.style.display = 'none';
        twoInputForm.style.display = 'none';
        oneInputFliedMedia.setAttribute('name', 'image_front');
        labelValue.innerText = "Image:";
    } else if (content_type.value == 3) {
        oneInput.value = 3;
        console.log(oneInput.value);
        oneInputFormMedia.style.display = 'block';
        oneInputFormText.style.display = 'none';
        twoInputForm.style.display = 'none';
        oneInputFliedMedia.setAttribute('name', 'audio_front');
        labelValue.innerText = "Audio:";
    } else if (content_type.value == 4) {
        oneInput.value = 4;
        console.log(oneInput.value);
        oneInputFormMedia.style.display = 'block';
        oneInputFormText.style.display = 'none';
        twoInputForm.style.display = 'none';
        oneInputFliedMedia.setAttribute('name', 'video_front');
        labelValue.innerText = "Video:";
    } else if (content_type.value == 5) {
        twoInput.value = 5;
        console.log(twoInput.value);
        twoInputLabelValue.innerText = "Text and Image:";
        oneInputFormText.style.display = 'none';
        oneInputFormMedia.style.display = 'none';
        twoInputField.setAttribute('name', 'image_front');
        twoInputForm.style.display = 'block';
    } else if (content_type.value == 6) {
        twoInput.value = 6;
        console.log(twoInput.value);
        twoInputLabelValue.innerText = "Text and Audio:";
        oneInputFormText.style.display = 'none';
        oneInputFormMedia.style.display = 'none';
        twoInputField.setAttribute('name', 'audio_front');
        twoInputForm.style.display = 'block';
    } else if (content_type.value == 7) {
        twoInput.value = 7;
        console.log(twoInput.value);
        twoInputLabelValue.innerText = "Text and Video:";
        oneInputFormText.style.display = 'none';
        oneInputFormMedia.style.display = 'none';
        twoInputField.setAttribute('name', 'video_front');
        twoInputForm.style.display = 'block';
    } else {
        oneInputFormText.style.display = 'none';
        oneInputFormMedia.style.display = 'none';
        twoInputForm.style.display = 'none';
    }

}

function showFormBack() {
    var content_type = document.getElementById('section_content_type_back');
    var twoInputLabelValue = document.getElementById('twoInputLabelValue_back');
    var labelValue = document.getElementById('labelValue_back');
    var oneInputFliedMedia  = document.getElementById('oneInputFieldMedia_back');
    var oneInputFormText = document.getElementById('oneInputFormText_back');
    var oneInputFormMedia = document.getElementById('oneInputFormMedia_back');
    var twoInputForm = document.getElementById('twoInputForm_back');
    var twoInputField = document.getElementById('twoInputField_back');
    var oneInput = document.getElementById('oneInput_content_type_id_back');
    var twoInput = document.getElementById('twoInput_content_type_id_back');

    if (content_type.value == 1) {
        oneInput.value = 1;
        console.log(oneInput.value);
        oneInputFormText.style.display = 'block';
        oneInputFormMedia.style.display = 'none';
        twoInputForm.style.display = 'none';
    } else if (content_type.value == 2) {
        oneInput.value = 2;
        console.log(oneInput.value);
        oneInputFormMedia.style.display = 'block';
        oneInputFormText.style.display = 'none';
        twoInputForm.style.display = 'none';
        oneInputFliedMedia.setAttribute('name', 'image_back');
        labelValue.innerText = "Image:";
    } else if (content_type.value == 3) {
        oneInput.value = 3;
        console.log(oneInput.value);
        oneInputFormMedia.style.display = 'block';
        oneInputFormText.style.display = 'none';
        twoInputForm.style.display = 'none';
        oneInputFliedMedia.setAttribute('name', 'audio_back');
        labelValue.innerText = "Audio:";
    } else if (content_type.value == 4) {
        oneInput.value = 4;
        console.log(oneInput.value);
        oneInputFormMedia.style.display = 'block';
        oneInputFormText.style.display = 'none';
        twoInputForm.style.display = 'none';
        oneInputFliedMedia.setAttribute('name', 'video_back');
        labelValue.innerText = "Video:";
    } else if (content_type.value == 5) {
        twoInput.value = 5;
        console.log(twoInput.value);
        twoInputLabelValue.innerText = "Text and Image:";
        oneInputFormText.style.display = 'none';
        oneInputFormMedia.style.display = 'none';
        twoInputField.setAttribute('name', 'image_back');
        twoInputForm.style.display = 'block';
    } else if (content_type.value == 6) {
        twoInput.value = 6;
        console.log(twoInput.value);
        twoInputLabelValue.innerText = "Text and Audio:";
        oneInputFormText.style.display = 'none';
        oneInputFormMedia.style.display = 'none';
        twoInputField.setAttribute('name', 'audio_back');
        twoInputForm.style.display = 'block';
    } else if (content_type.value == 7) {
        twoInput.value = 7;
        console.log(twoInput.value);
        twoInputLabelValue.innerText = "Text and Video:";
        oneInputFormText.style.display = 'none';
        oneInputFormMedia.style.display = 'none';
        twoInputField.setAttribute('name', 'video_back');
        twoInputForm.style.display = 'block';
    } else {
        oneInputFormText.style.display = 'none';
        oneInputFormMedia.style.display = 'none';
        twoInputForm.style.display = 'none';
    }

}