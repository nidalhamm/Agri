<?php
header('Content-Type: application/json; charset=utf-8');

$host = 'localhost';
$dbname = 'agri_exchange';
$username = 'root';
$password = '';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
        throw new Exception('طريقة الطلب غير مدعومة');
    }

    $clarity = isset($_POST['clarity']) ? (int)$_POST['clarity'] : 0;
    $futureUse = $_POST['future_use'] ?? '';
    $bestPart = $_POST['best_part'] ?? '';
    $suggestions = isset($_POST['suggestions']) ? trim($_POST['suggestions']) : '';

    if ($clarity < 1 || $clarity > 5) {
        throw new Exception('درجة الوضوح غير صالحة');
    }

    if (!in_array($futureUse, ['yes', 'maybe', 'no'])) {
        throw new Exception('اختيار "الاستخدام المستقبلي" غير معتمد');
    }

    if (empty($bestPart)) {
        throw new Exception('يرجى اختيار القسم المفضل');
    }

    $stmt = $pdo->prepare("INSERT INTO feedbacks (clarity, future_use, best_part, suggestions) VALUES (?, ?, ?, ?)");
    $stmt->execute([$clarity, $futureUse, $bestPart, $suggestions]);

    echo json_encode(['success' => true, 'message' => 'شكرًا لتقييمك! 🌾']);
} catch (Exception $e) {
    http_response_code(400);
    echo json_encode(['success' => false, 'message' => $e->getMessage()]);
}
?>