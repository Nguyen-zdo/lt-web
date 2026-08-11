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
        "ten" => "Dự án Thiết Kế Web",
        "moTa" => "Tổng hợp các bài tập thực hành HTML/CSS/JavaScript qua từng buổi học — từ layout cơ bản, "
                . "hiệu ứng tương tác, đến xây dựng giao diện menu dạng tab điều hướng ngang.",
        "congNghe" => ["HTML", "CSS", "JavaScript"],
        "link" => "https://nguyen-zdo.github.io/BTL/",
        "icon" => "fa-code",
    ],
    [
        "ten" => "Dự án Lập Trình Web",
        "moTa" => "Xây dựng hệ thống quản lý đăng ký lịch học cho sinh viên, "
                . "hiệu ứng tương tác,xây dựng giao diện, lưu trữ thông tin và tương tác với người dùng.",
        "congNghe" => ["HTML", "CSS", "JavaScript","PHP", "MySQL"],
        "link" => "",
        "icon" => "fa-code",
    ],
    [
        "ten" => "Dự án web đọc sách WEBOOK",
        "moTa" => "Xây dựng hệ thống quản lý các đầu sách đọc online.",
        "congNghe" => ["Java"],
        "link" => "",
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
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Fraunces:opsz,wght@9..144,400;9..144,600;9..144,700&family=Be+Vietnam+Pro:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <title>Giới thiệu - <?php echo htmlspecialchars($hoTen); ?></title>
    <style>
        :root {
            --ink: #1c1b29;
            --paper: #f1efe6;
            --paper-line: #e3ded0;
            --card: #ffffff;
            --brand: #5b4fe9;
            --brand-dark: #4038b8;
            --accent: #f4a620;
            --accent-dark: #d98a0f;
            --muted: #6b6880;
        }

        * { box-sizing: border-box; }

        html { background-color: var(--paper); }
        html, body { height: 100%; overscroll-behavior-y: none; }

        body {
            font-family: 'Be Vietnam Pro', sans-serif;
            color: var(--ink);
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            opacity: 0;
            transition: opacity 0.6s ease-in-out;

            /* faint notebook dot-grid on a warm paper ground */
            background-color: var(--paper);
            background-image: radial-gradient(var(--paper-line) 1.1px, transparent 1.1px);
            background-size: 22px 22px;
        }

        @media (prefers-reduced-motion: reduce) {
            * { transition: none !important; animation: none !important; }
        }

        main { flex: 1 0 auto; }

        .container {
            max-width: 1040px;
            margin: 0 auto;
            padding: 48px 18px 56px;
        }

        .grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 22px;
        }

        .card {
            background: var(--card);
            border: 1px solid rgba(28,27,41,0.08);
            border-radius: 4px;
            padding: 26px;
            transform: rotate(var(--tilt, 0deg));
            box-shadow: 0 1px 0 rgba(28,27,41,0.04);
            opacity: 0;
            animation: settle 0.55s ease forwards;
            animation-delay: var(--delay, 0s);
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }
        .card:hover {
            transform: rotate(0deg) translateY(-3px);
            box-shadow: 0 14px 28px rgba(28,27,41,0.14);
            z-index: 2;
        }

        @keyframes settle {
            from { opacity: 0; transform: translateY(10px) rotate(var(--tilt, 0deg)); }
            to   { opacity: 1; transform: translateY(0) rotate(var(--tilt, 0deg)); }
        }
        @media (prefers-reduced-motion: reduce) {
            .card { opacity: 1; animation: none; }
        }

        .eyebrow {
            font-size: 11px;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 1.6px;
            color: var(--brand);
            margin-bottom: 12px;
            display: flex;
            align-items: center;
            gap: 8px;
        }
        .eyebrow::before {
            content: "";
            width: 6px;
            height: 6px;
            background: var(--accent);
            border-radius: 50%;
            display: inline-block;
        }

        /* ---- Profile card: styled like a student ID / dossier ---- */
        .card-profile {
            grid-column: span 2;
            grid-row: span 2;
            --tilt: -1deg;
            background: var(--ink);
            color: var(--paper);
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            position: relative;
            overflow: hidden;
            border: none;
        }
        .card-profile::before {
            /* perforated edge along the bottom, like a torn ticket stub */
            content: "";
            position: absolute;
            bottom: 0; left: 0; right: 0;
            height: 14px;
            background-image: radial-gradient(circle, var(--paper) 5px, transparent 5.5px);
            background-size: 22px 22px;
            background-position: -6px 8px;
            background-repeat: repeat-x;
        }
        .id-badge {
            position: absolute;
            top: 18px;
            right: -34px;
            background: var(--accent);
            color: var(--ink);
            font-size: 11px;
            font-weight: 700;
            letter-spacing: 1.5px;
            text-transform: uppercase;
            padding: 5px 40px;
            transform: rotate(35deg);
        }
        .avatar {
            width: 88px;
            height: 88px;
            border-radius: 50%;
            background: var(--paper);
            color: var(--brand-dark);
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: 'Fraunces', serif;
            font-size: 34px;
            font-weight: 700;
            margin-bottom: 16px;
            border: 3px solid var(--accent);
        }
        .card-profile h1 {
            font-family: 'Fraunces', serif;
            font-size: 27px;
            margin: 0 0 8px;
            font-weight: 700;
            line-height: 1.2;
        }
        .card-profile .lop {
            font-size: 13px;
            font-weight: 600;
            letter-spacing: 0.5px;
            color: var(--ink);
            background: var(--paper);
            padding: 4px 12px;
            border-radius: 999px;
            margin-bottom: 14px;
        }
        .card-profile .tagline {
            font-size: 13.5px;
            opacity: 0.85;
            line-height: 1.6;
            max-width: 220px;
        }

        /* ---- Bio card ---- */
        .card-bio {
            grid-column: span 2;
            --tilt: 0.6deg;
        }
        .card-bio h2, .card-skills h2 {
            font-family: 'Fraunces', serif;
            font-size: 19px;
            font-weight: 600;
            margin: 0 0 4px;
        }
        .card-bio p {
            margin: 10px 0 0;
            font-size: 14.5px;
            line-height: 1.8;
            color: var(--ink);
        }

        /* ---- Skills card: tags styled as washi-tape stickers ---- */
        .card-skills {
            grid-column: span 2;
            --tilt: -0.5deg;
        }
        .skill-tags {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            margin-top: 14px;
        }
        .skill-tag {
            font-size: 12.5px;
            font-weight: 600;
            background: #fff7e6;
            color: var(--accent-dark);
            border: 1px solid rgba(244,166,32,0.4);
            padding: 6px 13px;
            border-radius: 3px;
            transform: rotate(var(--r, 0deg));
        }
        .skill-tag:nth-child(3n) { --r: 1.5deg; }
        .skill-tag:nth-child(3n+1) { --r: -1.5deg; }
        .skill-tag:nth-child(3n+2) { --r: 0.5deg; }

        /* ---- Project cards ---- */
        .card-project {
            grid-column: span 2;
            display: flex;
            flex-direction: column;
        }
        .card-project:nth-of-type(odd) { --tilt: 0.5deg; }
        .card-project:nth-of-type(even) { --tilt: -0.5deg; }

        .project-icon {
            width: 42px;
            height: 42px;
            border-radius: 10px;
            background: var(--ink);
            color: var(--accent);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 18px;
            margin-bottom: 14px;
        }
        .card-project h3 {
            font-family: 'Fraunces', serif;
            margin: 0 0 8px;
            font-size: 17px;
            font-weight: 600;
            color: var(--ink);
        }
        .card-project p {
            margin: 0 0 14px;
            font-size: 13.5px;
            color: var(--muted);
            line-height: 1.7;
            flex-grow: 1;
        }
        .tags {
            display: flex;
            flex-wrap: wrap;
            gap: 6px;
            margin-bottom: 18px;
        }
        .tag {
            font-size: 11.5px;
            font-weight: 600;
            background: var(--paper);
            color: var(--muted);
            padding: 4px 10px;
            border-radius: 999px;
            border: 1px solid var(--paper-line);
        }
        .project-link {
            display: inline-flex;
            align-items: center;
            gap: 7px;
            align-self: flex-start;
            font-size: 13.5px;
            font-weight: 600;
            color: var(--ink);
            background: transparent;
            padding: 8px 0;
            border-bottom: 2px solid var(--ink);
            text-decoration: none;
            transition: color 0.15s, border-color 0.15s, gap 0.15s;
        }
        .project-link:hover {
            color: var(--brand-dark);
            border-color: var(--accent);
            gap: 10px;
        }

        @media (max-width: 720px) {
            .grid { grid-template-columns: repeat(2, 1fr); }
            .card-profile { grid-column: span 2; grid-row: span 1; }
            .card-bio, .card-skills, .card-project { grid-column: span 2; }
            .card { transform: rotate(0deg) !important; }
            .id-badge { display: none; }
        }
    </style>
</head>
<body onload="document.body.style.opacity = 1;">
    <main>
        <div class="container">
            <div class="grid">
                <div class="card card-profile" style="--delay:0.05s;">
                    <div class="id-badge">Hồ sơ</div>
                    <div class="avatar"><?php echo htmlspecialchars(mb_substr($hoTen, 0, 1)); ?></div>
                    <h1><?php echo htmlspecialchars($hoTen); ?></h1>
                    <div class="lop"><?php echo htmlspecialchars($lop); ?></div>
                    <div class="tagline"><?php echo htmlspecialchars($tagline); ?></div>
                </div>

                <div class="card card-bio" style="--delay:0.12s;">
                    <div class="eyebrow">Về mình</div>
                    <p><?php echo nl2br(htmlspecialchars($gioiThieu)); ?></p>
                </div>

                <div class="card card-skills" style="--delay:0.18s;">
                    <div class="eyebrow">Kỹ năng</div>
                    <div class="skill-tags">
                        <?php foreach ($kyNang as $kn): ?>
                        <span class="skill-tag"><?php echo htmlspecialchars($kn); ?></span>
                        <?php endforeach; ?>
                    </div>
                </div>

                <?php $i = 0; foreach ($duAn as $du): $i++; ?>
                <div class="card card-project" style="--delay:<?php echo 0.18 + $i * 0.06; ?>s;">
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
        </div>
    </main>
</body>
</html>
