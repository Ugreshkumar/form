<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // यूज़र द्वारा भेजे गए डेटा को प्राप्त करना
    $name = $_POST['name'];
    $userid = $_POST['userid'];
    $password = $_POST['password'];

    // 'नाम' नामक फोल्डर में डेटा सेव करने के लिए फोल्डर को चेक करना
    if (!file_exists('नाम')) {
        mkdir('नाम', 0777, true);  // अगर फोल्डर नहीं है तो उसे बनाएँ
    }

    // डेटा को एक टेक्स्ट फाइल में सेव करना
    $file = fopen('नाम/data.txt', 'a');  // 'a' मोड से फाइल को खोलें (अगर फाइल नहीं है तो बनाएँ)
    fwrite($file, "नाम: $name\nयूज़र आईडी: $userid\nपासवर्ड: $password\n\n");
    fclose($file);

    echo "डेटा सफलतापूर्वक सेव हो गया!";
}
?>
