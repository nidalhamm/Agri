<?php
?>
<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>البورصة الزراعية - دليل مُفصّل من الألف إلى الياء</title>
  <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@300;400;500;700&display=swap" rel="stylesheet">
  <style>
    :root {
      --primary: #2e7d32;
      --primary-light: #4caf50;
      --secondary: #ff9800;
      --light: #f5f5f5;
      --dark: #333;
      --gray: #757575;
      --card-bg: white;
      --shadow: 0 4px 12px rgba(0,0,0,0.1);
    }

    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: 'Tajawal', sans-serif;
      background: linear-gradient(135deg, #e8f5e9, #f1f8e9);
      color: var(--dark);
      line-height: 1.7;
    }

    header {
      background: var(--primary);
      color: white;
      padding: 2rem 1rem;
      text-align: center;
      box-shadow: var(--shadow);
    }

    header h1 {
      font-size: 2.2rem;
      margin-bottom: 0.5rem;
    }

    nav {
      background: white;
      padding: 0.8rem;
      position: sticky;
      top: 0;
      z-index: 100;
      box-shadow: var(--shadow);
    }

    nav ul {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      list-style: none;
      gap: 1rem;
    }

    nav a {
      text-decoration: none;
      color: var(--primary);
      font-weight: 600;
      padding: 0.5rem 1rem;
      border-radius: 20px;
      transition: all 0.3s;
    }

    nav a:hover, nav a.active {
      background: var(--primary-light);
      color: white;
    }

    .container {
      max-width: 1200px;
      margin: 2rem auto;
      padding: 0 1.5rem;
    }

    .section {
      background: var(--card-bg);
      border-radius: 16px;
      padding: 2rem;
      margin-bottom: 2rem;
      box-shadow: var(--shadow);
      transition: transform 0.3s;
    }

    .section:hover {
      transform: translateY(-5px);
    }

    .section h2 {
      color: var(--primary);
      margin-bottom: 1.2rem;
      font-size: 1.6rem;
      border-bottom: 2px solid var(--primary-light);
      padding-bottom: 0.5rem;
    }

    .section p, .section li {
      margin-bottom: 0.8rem;
      color: var(--dark);
    }

    ul {
      padding-right: 1.5rem;
    }

    .step-card {
      background: #f9f9f9;
      border-left: 4px solid var(--secondary);
      padding: 1rem;
      margin: 1rem 0;
      border-radius: 8px;
    }

    .interactive-example {
      background: #e3f2fd;
      padding: 1.5rem;
      border-radius: 12px;
      margin: 1.5rem 0;
    }

    .calculator, .quiz-form, .feedback-form, .contact-form {
      display: flex;
      flex-direction: column;
      gap: 1rem;
      margin: 1.5rem 0;
    }

    input, textarea, select, button {
      padding: 0.7rem;
      font-size: 1rem;
      border: 1px solid #ccc;
      border-radius: 8px;
    }

    button {
      background: var(--primary);
      color: white;
      font-weight: bold;
      cursor: pointer;
      transition: background 0.3s;
    }

    button:hover {
      background: var(--primary-light);
    }

    .result {
      font-size: 1.2rem;
      font-weight: bold;
      color: var(--primary);
      margin-top: 1rem;
      padding: 1rem;
      background: white;
      border-radius: 8px;
      display: none;
    }

    .accordion {
      margin: 1rem 0;
    }

    .accordion-header {
      background: var(--primary-light);
      color: white;
      padding: 1rem;
      cursor: pointer;
      border-radius: 8px;
      margin-bottom: 0.5rem;
      font-weight: 600;
    }

    .accordion-content {
      padding: 1rem;
      background: #f5f5f5;
      border-radius: 0 0 8px 8px;
      display: none;
    }

    .participants-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(160px, 1fr));
      gap: 1.2rem;
      margin: 1.5rem 0;
    }

    .participant-card {
      text-align: center;
      padding: 1.2rem;
      background: white;
      border-radius: 12px;
      box-shadow: var(--shadow);
    }

    .participant-card h4 {
      color: var(--primary);
      margin-top: 0.5rem;
    }

    .quiz-question {
      margin-bottom: 1.5rem;
      padding: 1rem;
      background: #f9f9f9;
      border-radius: 10px;
    }

    .quiz-question p {
      margin-bottom: 0.8rem;
      font-weight: 600;
    }

    .quiz-question label {
      display: block;
      margin: 0.4rem 0;
      cursor: pointer;
    }

    footer {
      text-align: center;
      padding: 2rem;
      background: var(--dark);
      color: white;
      margin-top: 3rem;
    }

    @media (max-width: 768px) {
      nav ul {
        flex-direction: column;
        align-items: center;
        gap: 0.5rem;
      }
      .section {
        padding: 1.5rem;
      }
      .participants-grid {
        grid-template-columns: repeat(2, 1fr);
      }
    }
  </style>
</head>
<body>

<header>
  <h1>البورصة الزراعية</h1>
  <p>دليل شامل بالشرح حرفًا وحرفًا — من الفكرة إلى التنفيذ</p>
</header>

<nav>
  <ul>
    <li><a href="#definition" class="active">ما هي البورصة؟</a></li>
    <li><a href="#why">لماذا نحتاجها؟</a></li>
    <li><a href="#participants">المشاركون</a></li>
    <li><a href="#steps">آلية الصفقة</a></li>
    <li><a href="#calculator">حاسبة التحوط</a></li>
    <li><a href="#quiz">اختبر فهمك</a></li>
    <li><a href="#feedback">تقييمك يهمنا</a></li>
    <li><a href="#contact">اتصل بنا</a></li>
  </ul>
</nav>

<div class="container">

  <!-- Section 1: Definition -->
  <section id="definition" class="section">
    <h2>١. ما هي البورصة الزراعية؟</h2>
    <p>البورصة الزراعية هي سوق مركزي ومنظم لشراء وبيع السلع الزراعية (قمح، ذرة، سكر، قطن...) عبر <strong>عقود معيارية</strong>. الهدف: توحيد الأسعار، حماية المنتجين من التقلبات، وتسهيل التجارة.</p>
    
    <div class="accordion">
      <div class="accordion-header" onclick="toggle(this)">النوعان الرئيسيان للتعاملات ▼</div>
      <div class="accordion-content">
        <ul>
          <li><strong>السوق الفوري (Spot Market):</strong> تسليم فوري أو قريب بسعر السوق الحالي.</li>
          <li><strong>العقود الآجلة (Futures):</strong> اتفاق لشراء/بيع كمية محددة في تاريخ مستقبلي بسعر متفق عليه اليوم.</li>
        </ul>
      </div>
    </div>
  </section>

  <!-- Section 2: Why -->
  <section id="why" class="section">
    <h2>٢. لماذا نحتاج بورصة زراعية؟</h2>
    <ul>
      <li>✅ توحيد تسعير شفاف بدل التفاوض العشوائي</li>
      <li>✅ مرجعية سعرية موثوقة (Price Benchmark)</li>
      <li>✅ تقليل مخاطر التقلبات عبر <strong>التحوط (Hedging)</strong></li>
      <li>✅ تحسين التجارة الدولية (مواصفات موحدة)</li>
      <li>✅ تمكين المزارعين من القروض عبر <strong>إيصالات المخازن</strong></li>
      <li>✅ جذب السيولة عبر المضاربين والمستثمرين</li>
    </ul>
  </section>

  <!-- Section 3: Participants -->
  <section id="participants" class="section">
    <h2>٣. الجهات المشاركة</h2>
    <div class="participants-grid">
      <div class="participant-card">
        <div>👨‍🌾</div>
        <h4>المزارعون</h4>
        <p>بائعون يعرضون محصولهم</p>
      </div>
      <div class="participant-card">
        <div>🏭</div>
        <h4>المصانع</h4>
        <p>مشترون لتأمين المواد الخام</p>
      </div>
      <div class="participant-card">
        <div>📈</div>
        <h4>المضاربون</h4>
        <p>يسعون للربح من تغيّر الأسعار</p>
      </div>
      <div class="participant-card">
        <div>🏦</div>
        <h4>المقاصة</h4>
        <p>تُسوّي الصفقات وتُدير الضمانات</p>
      </div>
      <div class="participant-card">
        <div>📦</div>
        <h4>المخازن</h4>
        <p>تستلم البضاعة وتصدر إيصالات</p>
      </div>
      <div class="participant-card">
        <div>🔍</div>
        <h4>جهات الفحص</h4>
        <p>تختبر الجودة (رطوبة، شوائب...)</p>
      </div>
    </div>
  </section>

  <!-- Section 4: Step-by-step -->
  <section id="steps" class="section">
    <h2>٤. آلية الصفقة — خطوة بخطوة</h2>
    <p>لنأخذ مثالًا: <strong>المزارع محمد يبيع 100 طن قمح عبر عقد آجل</strong>.</p>

    <div class="step-card">
      <strong>الخطوة 1:</strong> توحيد المواصفات — عقد قياسي: 50 طن، رطوبة ≤12%، شوائب ≤2%.
    </div>
    <div class="step-card">
      <strong>الخطوة 2:</strong> محمد يدخل أمر بيع لشهريْن (100 طن) بسعر 2500$/طن عبر منصة إلكترونية.
    </div>
    <div class="step-card">
      <strong>الخطوة 3:</strong> تتم مقابلة الأمر مع مشتري — تنفيذ الصفقة فورًا.
    </div>
    <div class="step-card">
      <strong>الخطوة 4:</strong> المقاصة تطلب <strong>هامش أولي 5%</strong> (=12,500$) كضمان.
    </div>
    <div class="step-card">
      <strong>الخطوة 5:</strong> يوميًا: تقييم سعر السوق (Mark-to-Market). إذا انخفض السعر، يُخصم من ضمان البائع.
    </div>
    <div class="step-card">
      <strong>الخطوة 6:</strong> عند التسليم: محمد يسلّم القمح لمخزن معتمد، ويُصدر إيصال مخزن.
    </div>
    <div class="step-card">
      <strong>الخطوة 7:</strong> يُنقل الإيصال للمشتري — تسوية نهائية للمراكز.
    </div>
  </section>

  <!-- Section 5: Calculator -->
  <section id="calculator" class="section">
    <h2>٥. حاسبة التحوط التفاعلية</h2>
    <p>احسب هامشك المطلوب وربحك/خسارتك حسب تغير السعر.</p>

    <div class="interactive-example">
      <h3>معطيات الصفقة:</h3>
      <ul>
        <li>حجم العقد: 50 طن</li>
        <li>السعر المتفق عليه: 2500 $/طن</li>
        <li>الهامش الأولي: 5%</li>
        <li>الهامش الصيانة: 3%</li>
      </ul>
    </div>

    <div class="calculator">
      <input type="number" id="tonPrice" placeholder="السعر الجديد للطن ($)" value="2300">
      <input type="number" id="tons" placeholder="الكمية (طن)" value="100" min="1">
      <button onclick="calculate()">احسب الربح/الخسارة</button>
      <div id="result" class="result"></div>
    </div>
  </section>

  <!-- Section 6: Quiz -->
  <section id="quiz" class="section">
    <h2>٦. اختبر فهمك!</h2>
    <p>اختر الإجابة الصحيحة لكل سؤال. لنرى مدى استيعابك لفكرة البورصة الزراعية.</p>

    <form id="quizForm" class="quiz-form">
      <div class="quiz-question">
        <p>ما الهدف الرئيسي من استخدام العقود الآجلة؟</p>
        <label><input type="radio" name="q1" value="a"> شراء المحصول بأرخص سعر ممكن</label>
        <label><input type="radio" name="q1" value="b"> التحوط ضد تقلبات الأسعار</label>
        <label><input type="radio" name="q1" value="c"> تخزين المحصول في المخازن</label>
      </div>

      <div class="quiz-question">
        <p>من هو الطرف الذي يُصدر "إيصال المخزن"؟</p>
        <label><input type="radio" name="q2" value="a"> المزارع</label>
        <label><input type="radio" name="q2" value="b"> المخزن المعتمد</label>
        <label><input type="radio" name="q2" value="c"> المقاصة</label>
      </div>

      <div class="quiz-question">
        <p>إذا انخفض سعر القمح بعد بيع عقد آجل، فما وضع البائع؟</p>
        <label><input type="radio" name="q3" value="a"> يربح فرق السعر</label>
        <label><input type="radio" name="q3" value="b"> يخسر فرق السعر ويُخصم من هامشه</label>
        <label><input type="radio" name="q3" value="c"> لا يتأثر لأنه باع بسعر ثابت</label>
      </div>

      <button type="button" onclick="gradeQuiz()">احسب نتيجتك</button>
      <div id="quizResult" class="result"></div>
    </form>
  </section>

  <!-- Section 7: Feedback -->
  <section id="feedback" class="section">
    <h2>٧. تقييمك يهمنا!</h2>
    <p>ساعدنا في تحسين المحتوى. ما رأيك في شرح فكرة البورصة الزراعية؟</p>

    <form id="feedbackForm" class="feedback-form">
      <label>
        مدى وضوح المحتوى:
        <select id="clarity">
          <option value="5">ممتاز - فهمت كل شيء</option>
          <option value="4">جيد جدًا</option>
          <option value="3">مقبول</option>
          <option value="2">ضعيف</option>
          <option value="1">غير واضح</option>
        </select>
      </label>

      <label>
        هل ستفكر في استخدام بورصة زراعية مستقبلاً؟
        <select id="futureUse">
          <option value="yes">نعم، بالتأكيد</option>
          <option value="maybe">ربما</option>
          <option value="no">لا</option>
        </select>
      </label>

      <label>
        ما أكثر قسم أفادك؟
        <select id="bestPart">
          <option value="definition">ما هي البورصة؟</option>
          <option value="steps">آلية الصفقة</option>
          <option value="calculator">حاسبة التحوط</option>
          <option value="participants">المشاركون</option>
          <option value="all">كل الأقسام</option>
        </select>
      </label>

      <label>
        ملاحظاتك أو اقتراحاتك:
        <textarea id="suggestions" rows="3" placeholder="شاركنا رأيك..."></textarea>
      </label>

      <button type="button" onclick="submitFeedback()">إرسال التقييم</button>
      <div id="feedbackResult" class="result"></div>
    </form>
  </section>

  <!-- Section 8: Contact -->
  <section id="contact" class="section">
    <h2>٨. اتصل بنا</h2>
    <p>هل لديك استفسار؟ أرسل لنا رسالة — سيتم الرد عليك قريبًا.</p>

    <form id="contactForm" class="contact-form">
      <input type="text" id="name" placeholder="اسمك الكامل" required>
      <input type="email" id="email" placeholder="بريدك الإلكتروني" required>
      <textarea id="message" rows="4" placeholder="رسالتك..." required></textarea>
      <button type="button" onclick="submitContact()">إرسال الرسالة</button>
      <div id="contactResult" class="result"></div>
    </form>
  </section>

</div>

<footer>
  <p>البورصة الزراعية — بوابة المزارع إلى الأسواق العالمية | تم التصميم لدعم الاقتصاد الزراعي</p>
  <p>هذا الموقع تعليمي وتفاعلي — مطور باستخدام PHP وMySQL عبر بيئة XAMPP</p>
</footer>

<script>
  function toggle(header) {
    const content = header.nextElementSibling;
    if (content.style.display === "block") {
      content.style.display = "none";
      header.textContent = header.textContent.replace("▲", "▼");
    } else {
      content.style.display = "block";
      header.textContent = header.textContent.replace("▼", "▲");
    }
  }

  function calculate() {
    const newPrice = parseFloat(document.getElementById("tonPrice").value);
    const tons = parseFloat(document.getElementById("tons").value);
    const agreedPrice = 2500;
    
    if (isNaN(newPrice) || isNaN(tons)) {
      alert("يرجى إدخال أرقام صحيحة");
      return;
    }

    const diff = newPrice - agreedPrice;
    const total = diff * tons;
    const marginInitial = 0.05 * agreedPrice * tons;
    const marginMaintenance = 0.03 * agreedPrice * tons;

    let resultText = `
      <strong>النتائج:</strong><br>
      - فرق السعر: ${diff > 0 ? '+' : ''}${diff.toFixed(2)} $/طن<br>
      - إجمالي الربح/الخسارة: ${total >= 0 ? 'ربح' : 'خسارة'} ${Math.abs(total).toFixed(2)} $<br>
      - الهامش الأولي المطلوب: ${marginInitial.toFixed(2)} $<br>
      - هامش الصيانة: ${marginMaintenance.toFixed(2)} $
    `;

    if (total < - (marginInitial - marginMaintenance)) {
      resultText += "<br><strong style='color:red;'>⚠️ تنبيه: سيتم طلب هامش إضافي (Margin Call)</strong>";
    }

    document.getElementById("result").innerHTML = resultText;
    document.getElementById("result").style.display = "block";
  }

  function gradeQuiz() {
    const q1 = document.querySelector('input[name="q1"]:checked')?.value;
    const q2 = document.querySelector('input[name="q2"]:checked')?.value;
    const q3 = document.querySelector('input[name="q3"]:checked')?.value;

    if (!q1 || !q2 || !q3) {
      alert("يرجى الإجابة على جميع الأسئلة");
      return;
    }

    let score = 0;
    if (q1 === "b") score++;
    if (q2 === "b") score++;
    if (q3 === "b") score++;

    let message = "";
    if (score === 3) {
      message = "⭐ ممتاز! أنت الآن جاهز لدخول البورصة الزراعية!";
    } else if (score === 2) {
      message = "جيد! راجع القسم المتعلق بالتحوط لتحسين فهمك.";
    } else {
      message = "حاول مرة أخرى! لا تقلق، المحتوى متاح للمراجعة في أي وقت.";
    }

    document.getElementById("quizResult").innerHTML = `
      نتيجتك: ${score} من 3<br>${message}
    `;
    document.getElementById("quizResult").style.display = "block";
  }

  function submitFeedback() {
    const clarity = document.getElementById("clarity").value;
    const futureUse = document.getElementById("futureUse").value;
    const bestPart = document.getElementById("bestPart").value;
    const suggestions = document.getElementById("suggestions").value;

    if (!clarity || !futureUse || !bestPart) {
      alert("يرجى اختيار جميع الخيارات");
      return;
    }

    const formData = new FormData();
    formData.append('clarity', clarity);
    formData.append('future_use', futureUse);
    formData.append('best_part', bestPart);
    formData.append('suggestions', suggestions);

    fetch('feedback.php', {
        method: 'POST',
        body: formData
    })
    .then(response => {
        if (!response.ok) {
            throw new Error('الخادم أعاد حالة خطأ: ' + response.status);
        }
        return response.json();
    })
    .then(data => {
        const resDiv = document.getElementById("feedbackResult");
        if (data.success) {
            resDiv.innerHTML = data.message;
        } else {
            resDiv.innerHTML = "❌ " + data.message;
        }
        resDiv.style.display = "block";
    })
    .catch(error => {
        console.error('Error in submitFeedback:', error);
        document.getElementById("feedbackResult").innerHTML = 
            "⚠️ فشل الاتصال بـ feedback.php. تأكد من تشغيل XAMPP ووجود الملف.";
        document.getElementById("feedbackResult").style.display = "block";
    });
  }

  function submitContact() {
    const name = document.getElementById("name").value;
    const email = document.getElementById("email").value;
    const message = document.getElementById("message").value;

    if (!name || !email || !message) {
      alert("يرجى ملء جميع الحقول");
      return;
    }

    const formData = new FormData();
    formData.append('name', name);
    formData.append('email', email);
    formData.append('message', message);

    fetch('contact.php', {
        method: 'POST',
        body: formData
    })
    .then(response => {
        if (!response.ok) throw new Error('فشل الطلب');
        return response.json();
    })
    .then(data => {
        const resDiv = document.getElementById("contactResult");
        if (data.success) {
            resDiv.innerHTML = "شكرًا لك، " + name + "!<br>" + data.message;
            document.getElementById("contactForm").reset();
        } else {
            resDiv.innerHTML = "❌ " + data.message;
        }
        resDiv.style.display = "block";
    })
    .catch(() => {
        document.getElementById("contactResult").innerHTML = "⚠️ فشل الاتصال بـ contact.php.";
        document.getElementById("contactResult").style.display = "block";
    });
  }

  document.querySelectorAll('nav a').forEach(anchor => {
    anchor.addEventListener('click', function(e) {
      e.preventDefault();
      const targetId = this.getAttribute('href');
      const target = document.querySelector(targetId);
      if (target) {
        window.scrollTo({
          top: target.offsetTop - 80,
          behavior: 'smooth'
        });
        document.querySelectorAll('nav a').forEach(a => a.classList.remove('active'));
        this.classList.add('active');
      }
    });
  });
</script>

</body>
</html>