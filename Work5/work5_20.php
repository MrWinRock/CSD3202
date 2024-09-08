<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tax Calculator</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Noto+Sans+Thai:wght@100..900&display=swap');


        * {
            font-family: "Noto Sans Thai", sans-serif;
        }

        body {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        hr {
            width: 100%;
            margin: 20px 0;
        }

        .container {
            display: flex;
            flex-direction: column;
            flex-wrap: wrap;
            align-items: center;
            justify-self: space-between;
        }

        .result {
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: space-between;
            font-size: 18px;
            margin: auto 15px;
        }

        #income,
        #net-income {
            color: green;
        }

        #expense,
        #deduc,
        #tax-percent,
        #tax {
            color: red;
        }

        #error {
            font-size: 20px;
        }

        .back {
            text-align: center;
            border: none;
            border-radius: 25px;
            padding: 10px 20px;
            background: linear-gradient(to right, orange, red);
            color: white;
            font-size: 18px;
            cursor: pointer;
            background-size: 200% 100%;
            background-position: left;
            transition: background-position 0.5s ease;
        }

        .back:hover {
            background-position: right;
        }

        .back a {
            text-decoration: none;
            color: white;
        }
    </style>
</head>

<body>
    <h3>โปรแกรมที่รวมทุกหัวข้อเข้าด้วยกัน</h3>
    <h3>Name: ปฏิวัฒน์ กฤษฏิ์สุภารัตน์ ID: 65122250031</h3>
    <hr>

    <?php
    function calTax($netIncome)
    {
        $tax = 0;
        if ($netIncome <= 150000) {
            $tax = 0;
            $taxPercen = 0;
        } elseif ($netIncome <= 300000) {
            $tax = ($netIncome * 0.05);
            $taxPercen = 5;
        } elseif ($netIncome <= 500000) {
            $tax = ($netIncome * 0.10);
            $taxPercen = 10;
        } elseif ($netIncome <= 750000) {
            $tax = ($netIncome * 0.15);
            $taxPercen = 15;
        } elseif ($netIncome <= 1000000) {
            $tax = ($netIncome * 0.20);
            $taxPercen = 20;
        } elseif ($netIncome <= 2000000) {
            $tax = ($netIncome * 0.25);
            $taxPercen = 25;
        } elseif ($netIncome <= 5000000) {
            $tax = ($netIncome * 0.30);
            $taxPercen = 30;
        } else {
            $tax = ($netIncome * 0.35);
            $taxPercen = 35;
        }
        return [$tax, $taxPercen];
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        try {
            $income = $_POST['income'];
            $expense = $_POST['expense'];
            $deduc = $_POST['deduc'];

            $netIncome = ($income * 12) - $expense - $deduc;

            if ($netIncome < 0) {
                throw new Exception("รายได้สุทธิต้องมากกว่า 0");
            }

            [$tax, $taxPercent] = calTax($netIncome);
            echo "<div class='container'>";

            echo "<div class='result'><strong>เงินเดือน:</strong> <p id='income'>$income</p> บาท</div>" .
                "<div class='result'><strong>ค่าใช้จ่ายทั้งปี:</strong> <p id='expense'>$expense</p> บาท</div>" .
                "<div class='result'><strong>ค่าลดหย่อนภาษี:</strong> <p id='deduc'>$deduc</p> บาท</div>" .
                "<div class='result'><strong>รายได้สุทธิ:</strong> <p id='net-income'>$netIncome</p> บาท</div>" .
                "<div class='result'><strong>อัตราภาษี:</strong> <p id='tax-percent'>$taxPercent</p> %</div>" .  // Added missing closing </div>
                "<div class='result'><strong>ภาษี:</strong> <p id='tax'>$tax</p> บาท</div>";

            echo "<br><div class='back'><a href='work5_20.html'>คำนวนใหม่</a></div>";

            echo "</div>";
        } catch (Exception $e) {
            echo "<p id='error'>Error: " . $e->getMessage() . "</p>";
            echo "<br><div class='back'><a href='work5_20.html'>กลับไป</a></div>";
        }
    }
    ?>
</body>

</html>