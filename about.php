<?php
// Thông tin cá nhân — chỉnh sửa các biến bên dưới để cập nhật nội dung
$hoTen = "Đỗ Hoàng Sĩ Nguyên";
$lop = "CNTTD2024B";
$tagline = "Sinh viên CNTT · Yêu thích thiết kế & lập trình web";
$gioiThieu = "Mình là sinh viên ngành Công nghệ thông tin, đam mê thiết kế và lập trình web. "
           . "Mình thích tự tay xây dựng giao diện, tối ưu trải nghiệm người dùng và học hỏi "
           . "những công nghệ mới trong quá trình học tập.";

$kyNang = ["HTML", "CSS", "JavaScript", "PHP", "Responsive Design"];

$duAn = [
    [
        "ten" => "Bài Tập Thiết Kế Web",
        "moTa" => "Tổng hợp các bài tập thực hành HTML/CSS/JavaScript qua từng buổi học — từ layout cơ bản, "
                . "hiệu ứng tương tác, đến xây dựng giao diện menu dạng tab điều hướng ngang.",
        "congNghe" => ["HTML", "CSS", "JavaScript"],
        "link" => "index.html",
        "icon" => "fa-code",
    ],
    // Thêm dự án khác vào đây theo cùng cấu trúc, ví dụ:
    // [
    //     "ten" => "Tên dự án",
    //     "moTa" => "Mô tả ngắn gọn về dự án.",
    //     "congNghe" => ["PHP", "MySQL"],
    //     "link" => "duan.html",
    //     "icon" => "fa-database",
    // ],
];
?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@300;400;500;700&display=swap" rel="stylesheet">
    <title>Giới thiệu - <?php echo htmlspecialchars($hoTen); ?></title>
    <style>
        :root {
            --brand: rgb(16, 160, 134);
            --brand-dark: rgb(12, 128, 108);
            --brand-light: #e6f7f4;
            --text: #1f2937;
            --muted: #6b7280;
            --bg: #F0F8FF;
        }

        * { box-sizing: border-box; }

        html { background-color: #333; }
        html, body { height: 100%; overscroll-behavior-y: none; }

        body {
            font-family: 'Kanit', sans-serif;
            background-color: var(--bg);
            margin: 0;
            padding: 0;
            color: var(--text);
            opacity: 0;
            transition: opacity 0.6s ease-in-out;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        @media (prefers-reduced-motion: reduce) {
            * { transition: none !important; animation: none !important; }
        }

        main { flex: 1 0 auto; }

        .topbar {
            background-color: var(--brand);
            padding: 18px 16px;
            text-align: center;
            color: white;
            font-size: 15px;
            font-weight: 500;
            letter-spacing: 0.5px;
        }

        .container {
            max-width: 1000px;
            margin: 0 auto;
            padding: 32px 16px 40px;
        }

        /* Bento-style grid: cards of different sizes tiled together,
           rather than one long stacked column. */
        .grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 18px;
        }

        .card {
            background: white;
            border-radius: 16px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.07);
            padding: 24px;
            transition: transform 0.18s ease, box-shadow 0.18s ease;
        }
        .card:hover {
            transform: translateY(-4px);
            box-shadow: 0 10px 24px rgba(0,0,0,0.12);
        }

        /* Profile card — tall, spans 2 columns x 2 rows */
        .card-profile {
            grid-column: span 2;
            grid-row: span 2;
            background: linear-gradient(160deg, var(--brand) 0%, var(--brand-dark) 100%);
            color: white;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
        }
        .avatar {
            width: 84px;
            height: 84px;
            border-radius: 50%;
            background: white;
            color: var(--brand-dark);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 32px;
            font-weight: 700;
            margin-bottom: 14px;
        }
        .card-profile h1 {
            font-size: 24px;
            margin: 0 0 6px;
            font-weight: 700;
        }
        .card-profile .lop {
            font-size: 14px;
            opacity: 0.9;
            margin-bottom: 10px;
        }
        .card-profile .tagline {
            font-size: 13px;
            opacity: 0.85;
            line-height: 1.5;
        }

        /* Bio card — wide, spans 2 columns */
        .card-bio {
            grid-column: span 2;
        }
        .card-label {
            font-size: 12px;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 1px;
            color: var(--brand);
            margin-bottom: 10px;
        }
        .card-bio p {
            margin: 0;
            font-size: 14.5px;
            line-height: 1.75;
            color: var(--text);
        }

        /* Skills card — wide, spans 2 columns */
        .card-skills {
            grid-column: span 2;
        }
        .skill-tags {
            display: flex;
            flex-wrap: wrap;
            gap: 8px;
        }
        .skill-tag {
            font-size: 13px;
            font-weight: 500;
            background: var(--brand-light);
            color: var(--brand-dark);
            padding: 6px 14px;
            border-radius: 999px;
        }

        /* Project cards — each spans 2 columns on desktop */
        .card-project {
            grid-column: span 2;
            display: flex;
            flex-direction: column;
        }
        .project-icon {
            width: 44px;
            height: 44px;
            border-radius: 12px;
            background: var(--brand-light);
            color: var(--brand-dark);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 20px;
            margin-bottom: 14px;
        }
        .card-project h3 {
            margin: 0 0 8px;
            font-size: 17px;
            color: var(--text);
        }
        .card-project p {
            margin: 0 0 14px;
            font-size: 14px;
            color: var(--muted);
            line-height: 1.65;
            flex-grow: 1;
        }
        .tags {
            display: flex;
            flex-wrap: wrap;
            gap: 6px;
            margin-bottom: 16px;
        }
        .tag {
            font-size: 12px;
            font-weight: 500;
            background: #f3f4f6;
            color: var(--muted);
            padding: 4px 10px;
            border-radius: 999px;
        }
        .project-link {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            align-self: flex-start;
            font-size: 14px;
            font-weight: 500;
            color: white;
            background: var(--brand);
            padding: 9px 16px;
            border-radius: 8px;
            text-decoration: none;
            transition: background 0.15s;
        }
        .project-link:hover { background: var(--brand-dark); }

        @media (max-width: 720px) {
            .grid { grid-template-columns: repeat(2, 1fr); }
            .card-profile { grid-column: span 2; grid-row: span 1; }
            .card-bio, .card-skills, .card-project { grid-column: span 2; }
        }

        .home-link {
            display: block;
            text-align: center;
            margin: 28px auto 0;
            padding: 14px 24px;
            background: var(--brand-dark);
            color: white;
            border-radius: 10px;
            text-decoration: none;
            font-size: 16px;
            font-weight: 500;
            max-width: 260px;
        }
        .home-link:hover { background: var(--brand); }

        .footer {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 20px;
            margin-top: 40px;
            flex-shrink: 0;
        }
        .footer p { margin: 6px 0; font-size: 14px; }
        .footer a {
            color: white;
            margin: 0 6px;
            text-decoration: none;
            font-size: 20px;
            display: inline-block;
        }
        .footer a:hover { opacity: 0.6; }
    </style>
</head>
<body onload="document.body.style.opacity = 1;">
    <div class="topbar">GIỚI THIỆU BẢN THÂN</div>

    <main>
        <div class="container">
            <div class="grid">
                <div class="card card-profile">
                    <div class="avatar"><?php echo htmlspecialchars(mb_substr($hoTen, 0, 1)); ?></div>
                    <h1><?php echo htmlspecialchars($hoTen); ?></h1>
                    <div class="lop"><?php echo htmlspecialchars($lop); ?></div>
                    <div class="tagline"><?php echo htmlspecialchars($tagline); ?></div>
                </div>

                <div class="card card-bio">
                    <div class="card-label">Về mình</div>
                    <p><?php echo nl2br(htmlspecialchars($gioiThieu)); ?></p>
                </div>

                <div class="card card-skills">
                    <div class="card-label">Kỹ năng</div>
                    <div class="skill-tags">
                        <?php foreach ($kyNang as $kn): ?>
                        <span class="skill-tag"><?php echo htmlspecialchars($kn); ?></span>
                        <?php endforeach; ?>
                    </div>
                </div>

                <?php foreach ($duAn as $du): ?>
                <div class="card card-project">
                    <div class="project-icon"><i class="fa <?php echo htmlspecialchars($du["icon"]); ?>"></i></div>
                    <h3><?php echo htmlspecialchars($du["ten"]); ?></h3>
                    <p><?php echo htmlspecialchars($du["moTa"]); ?></p>
                    <div class="tags">
                        <?php foreach ($du["congNghe"] as $tech): ?>
                        <span class="tag"><?php echo htmlspecialchars($tech); ?></span>
                        <?php endforeach; ?>
                    </div>
                    <a class="project-link" href="<?php echo htmlspecialchars($du["link"]); ?>">Xem dự án <i class="fa fa-arrow-right"></i></a>
                </div>
                <?php endforeach; ?>
            </div>

            <a href="index.html" class="home-link">← Về Menu Chính</a>
        </div>
    </main>

    <div class="footer">
        <p>Liên hệ tôi qua các tài khoản xã hội</p>
        <div>
            <a href="#" aria-label="Facebook"><i class="fa fa-facebook-official"></i></a>
            <a href="#" aria-label="Instagram"><i class="fa fa-instagram"></i></a>
            <a href="#" aria-label="Steam"><i class="fa fa-steam"></i></a>
            <a href="#" aria-label="Pinterest"><i class="fa fa-pinterest-p"></i></a>
            <a href="#" aria-label="Twitter"><i class="fa fa-twitter"></i></a>
            <a href="#" aria-label="LinkedIn"><i class="fa fa-linkedin"></i></a>
        </div>
        <p>by: Nguyen Do</p>
    </div>
</body>
</html>