## امیر: نرم افزار رایگان حسابداری لاراول
**[English](README.en.md)**


**توجه مهم:** امیر در حال حاضر در مرحله **توسعه** است و هنوز برای استفاده در محیط عملیاتی آماده نیست. ما بطور فعالانه در حال توسعه آن هستیم و به زودی تاریخ انتشار رسمی را اعلام خواهیم کرد. با ما همراه باشید!

**معرفی:**

**امیر** یک نرم افزار حسابداری رایگان و متن باز است که با لاراول نوشته شده و به طور خاص برای کسب و کارها و افراد ایرانی طراحی شده است. این نرم افزار با هدف ارائه یک راهکار جامع و کاربرپسند برای مدیریت امور مالی، با ویژگی هایی که مطابق با نیازهای خاص کاربران ایرانی است، از جمله پشتیبانی از قوانین مالیاتی ایران، ساخته شده است.

**ویژگی ها:**

* **آزاد (متن باز):** استفاده، اصلاح و مشارکت در آن رایگان است و به ازادی های کاربران احترام می گذارد.
* **رابط کاربری کاربرپسند:** استفاده آسان برای کسب و کارها با هر اندازه و دانش فنی.
* **چند زبانه:** در حال حاضر از زبان فارسی پشتیبانی می کند (با قابلیت اضافه شدن زبان های دیگر در آینده).
* **کارکردهای حسابداری:**
    * سامانه مودیان
    * مدیریت درآمد و هزینه
    * پیگیری فاکتورها و رسیدها
    * تهیه گزارشات
    * پشتیبانی از قوانین مالیاتی ایران

**نصب:**

1. **پیش نیازها:**
    * PHP >= 8.0
    * Composer
    * MySQL database
2. **دریافت فایل ها:**

```bash
git clone https://github.com/Jooyeshgar/FreeAmir.git
```

3. **نصب وابستگی ها:**

```bash
composer install
```

4. **Copy `.env.example` to `.env` and configure database credentials.**

5. **ساخت application key:**

```bash
php artisan key:generate
```

6. **Migrate the database:**

```bash
php artisan migrate
```

7. **Seed the database with sample data:**

```bash
php artisan db:seed
```

داده های نمایشی (اختیاری)
```bash
php artisan db:seed --class DemoSeeder
```

8. **Start the vite:**

```bash
npm run dev
```

9. **Start the development server:**

```bash
php artisan serve
```

**استفاده:**

1. با مرورگر وب خود به برنامه در http://localhost:8000 (یا پورتی که در فایل .env شما مشخص شده است) دسترسی پیدا کنید.
2. با اعتبار پیش فرض وارد شوید (ایمیل: admin@example.com، رمز عبور: password).
3. ویژگی ها و کارکردهای برنامه را بررسی کنید.

**مشارکت:**

ما از مشارکت در پروژه امیر استقبال می کنیم! لطفاً برای دستورالعمل های مربوط به ارسال گزارش باگ، درخواست ویژگی و درخواست های pull به فایل CONTRIBUTING.md مراجعه کنید: CONTRIBUTING.md

**لایسنس:**

این پروژه تحت لایسنس GPL-3 منتشر شده است. برای جزئیات به فایل LICENSE: LICENSE مراجعه کنید.

**پشتیبانی:**

برای هر گونه سوال یا مشکلی، لطفاً در مخزن گیت هاب یک issue ایجاد کنید.