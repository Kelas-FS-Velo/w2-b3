**Rencana Pengujian: Sistem Perpustakaan Cerdas dengan AI**

**1. Pendahuluan**

Dokumen ini menguraikan rencana pengujian untuk sistem Perpustakaan Cerdas dengan AI. Tujuannya adalah untuk memastikan bahwa sistem memenuhi persyaratan fungsional dan non-fungsional yang telah ditetapkan dalam Dokumen Persyaratan Produk (PRD) dan Dokumen Desain Teknis (TDD). Rencana ini mencakup strategi pengujian, lingkup pengujian, jenis pengujian, alat pengujian, dan kriteria penerimaan.

**2. Tujuan Pengujian**

*   Verifikasi bahwa semua fitur berfungsi sesuai dengan spesifikasi.
*   Identifikasi dan perbaiki cacat (bug) sebelum sistem diluncurkan.
*   Pastikan kinerja, keamanan, skalabilitas, kegunaan, dan keandalan sistem.
*   Validasi bahwa sistem memenuhi kebutuhan pengguna dan pemangku kepentingan.

**3. Lingkup Pengujian**

Pengujian akan mencakup semua komponen sistem, termasuk:

*   **Backend (Laravel):**
    *   API endpoints
    *   Model
    *   Controller
    *   Integrasi AI
    *   Otentikasi dan Otorisasi
*   **Frontend (Nuxt.js):**
    *   Halaman
    *   Komponen
    *   Penataan Gaya
    *   Manajemen State
    *   Komunikasi API
*   **Basis Data (MySQL):**
    *   Skema tabel
    *   Relasi
    *   Kueri
*   **Layanan AI (Google Cloud AI, Jina Embedding API):**
    *   Akurasi hasil AI
    *   Kinerja
    *   Penanganan kesalahan

**4. Jenis Pengujian**

*   **Pengujian Unit (Unit Testing):**
    *   **Tujuan:** Menguji setiap unit (fungsi, metode, kelas) kode secara terpisah untuk memastikan bahwa ia berfungsi dengan benar.
    *   **Pelaksana:** Pengembang
    *   **Alat Pengujian:** PHPUnit (untuk Laravel), Jest (untuk Nuxt.js)
    *   **Hal yang Diuji:**
        *   Logika bisnis dalam model dan controller Laravel.
        *   Perilaku komponen Vue.js.
        *   Validasi input dan output.
        *   Penanganan pengecualian (exceptions).
*   **Pengujian Skenario (Scenario Testing):**
    *   **Tujuan:** Menguji alur kerja (workflow) pengguna tertentu untuk memastikan bahwa sistem berfungsi dengan benar dari awal hingga akhir.
    *   **Pelaksana:** Penguji (Tester)
    *   **Contoh Skenario:**
        *   Pengguna mencari buku, melihat detail, dan menambahkan ke daftar bacaan.
        *   Librarian menambahkan buku baru ke katalog dan memperbarui inventaris.
        *   Admin menghasilkan laporan tentang judul buku yang paling sering dipinjam.
*   **Pengujian Integrasi (Integration Testing):**
    *   **Tujuan:** Menguji interaksi antara berbagai komponen sistem (misalnya, antara backend dan frontend, atau antara Laravel dan API AI).
    *   **Pelaksana:** Penguji (Tester)
    *   **Alat Pengujian:** Postman, Insomnia, atau alat pengujian API lainnya.
    *   **Hal yang Diuji:**
        *   Komunikasi API yang benar (permintaan dan respons).
        *   Transfer data yang akurat antara komponen.
        *   Penanganan kesalahan saat komponen berinteraksi.
*   **Pengujian Penerimaan Pengguna (User Acceptance Testing/UAT):**
    *   **Tujuan:** Memvalidasi bahwa sistem memenuhi kebutuhan pengguna dan pemangku kepentingan.
    *   **Pelaksana:** Pengguna Akhir (End Users), Pemangku Kepentingan (Stakeholders)
    *   **Hal yang Diuji:**
        *   Kegunaan antarmuka pengguna.
        *   Akurasi hasil pencarian dan rekomendasi.
        *   Kemudahan penggunaan fitur-fitur utama.
        *   Kesesuaian sistem dengan kebutuhan bisnis.
*   **Pengujian Kinerja (Performance Testing):**
    *   **Tujuan:** Menguji kinerja sistem dalam kondisi beban yang berbeda untuk memastikan bahwa ia merespons dengan cepat dan efisien.
    *   **Pelaksana:** Penguji Kinerja (Performance Tester)
    *   **Alat Pengujian:** Apache JMeter, LoadView, atau alat pengujian beban lainnya.
    *   **Hal yang Diuji:**
        *   Waktu respons API.
        *   Throughput (jumlah transaksi per detik).
        *   Pemanfaatan CPU dan memori.
        *   Skalabilitas sistem.
*   **Pengujian Keamanan (Security Testing):**
    *   **Tujuan:** Mengidentifikasi dan mengatasi potensi kerentanan keamanan dalam sistem.
    *   **Pelaksana:** Ahli Keamanan (Security Expert)
    *   **Alat Pengujian:** OWASP ZAP, Burp Suite, atau alat pemindaian keamanan lainnya.
    *   **Hal yang Diuji:**
        *   Otentikasi dan otorisasi.
        *   Validasi input (mencegah injeksi SQL dan XSS).
        *   Enkripsi data.
        *   Kontrol akses.
*   **Pengujian Kegunaan (Usability Testing):**
    *   **Tujuan:** Mengevaluasi kemudahan penggunaan dan kepuasan pengguna terhadap sistem.
    *   **Pelaksana:** Penguji Kegunaan (Usability Tester), Pengguna Akhir (End Users)
    *   **Metode:** Wawancara pengguna, observasi, pengujian A/B.
    *   **Hal yang Diuji:**
        *   Kemudahan navigasi.
        *   Kejelasan instruksi dan umpan balik.
        *   Kepuasan pengguna secara keseluruhan.
*   **Pengujian Aksesibilitas (Accessibility Testing):**
    *   **Tujuan:** Memastikan sistem dapat digunakan oleh orang-orang dengan disabilitas.
    *   **Pelaksana:** Penguji Aksesibilitas (Accessibility Tester)
    *   **Alat Pengujian:** WAVE, Axe, atau alat pengujian aksesibilitas lainnya.
    *   **Standar:** WCAG (Web Content Accessibility Guidelines)
    *   **Hal yang Diuji:**
        *   Kontras warna.
        *   Ukuran font.
        *   Alternatif teks untuk gambar.
        *   Navigasi keyboard.
        *   Kompatibilitas dengan pembaca layar (screen readers).

**5. Kriteria Penerimaan**

*   Semua pengujian unit harus lulus dengan cakupan kode (code coverage) minimal 80%.
*   Semua skenario pengujian harus berhasil dieksekusi tanpa cacat kritis (critical defects).
*   Sistem harus memenuhi target kinerja yang telah ditetapkan dalam Dokumen Desain Teknis (TDD).
*   Tidak ada kerentanan keamanan yang teridentifikasi selama pengujian keamanan.
*   Sistem harus memenuhi standar aksesibilitas (WCAG).
*   Pengguna akhir harus menerima sistem selama pengujian penerimaan pengguna.

**6. Lingkungan Pengujian**

*   Lingkungan pengembangan (Development environment)
*   Lingkungan staging (Staging environment) - Lingkungan yang identik dengan lingkungan produksi untuk pengujian integrasi dan UAT.
*   Lingkungan produksi (Production environment) - Setelah semua pengujian berhasil, sistem diluncurkan ke lingkungan produksi.

**7. Alat Pengujian**

| Jenis Pengujian      | Alat Pengujian yang Disarankan                                      | Keterangan                                                                                                                                                               |
|-----------------------|-------------------------------------------------------------------|-------------------------------------------------------------------------------------------------------------------------------------------------------------------------|
| Pengujian Unit       | PHPUnit (Laravel), Jest (Nuxt.js)                                 | Alat pengujian unit yang populer dan banyak digunakan untuk PHP dan JavaScript.                                                                                          |
| Pengujian Integrasi    | Postman, Insomnia, Thunder Client (VS Code Extension)                  | Alat pengujian API yang memungkinkan Anda mengirim permintaan HTTP dan memverifikasi respons.                                                                        |
| Pengujian Kinerja      | Apache JMeter, LoadView, Gatling                                  | Alat pengujian beban yang dapat mensimulasikan sejumlah besar pengguna dan mengukur kinerja sistem.                                                                      |
| Pengujian Keamanan     | OWASP ZAP, Burp Suite, Nessus                                   | Alat pemindaian keamanan yang dapat mengidentifikasi kerentanan keamanan umum dalam aplikasi web.                                                                       |
| Pengujian Kegunaan      | Lookback, Maze, Optimal Workshop                               | Alat pengujian kegunaan yang memungkinkan Anda merekam sesi pengguna, mengumpulkan umpan balik, dan menganalisis perilaku pengguna.                                     |
| Pengujian Aksesibilitas | WAVE, Axe, Lighthouse (Google Chrome DevTools)                    | Alat pengujian aksesibilitas yang dapat mengidentifikasi masalah aksesibilitas dalam aplikasi web.                                                                       |
| Manajemen Pengujian   | Jira, TestRail, Zephyr                                            | Alat manajemen pengujian yang memungkinkan Anda merencanakan pengujian, melacak hasil pengujian, dan melaporkan cacat.                                                     |

**8. Jadwal Pengujian**

(Sertakan jadwal pengujian terperinci dengan tenggat waktu untuk setiap jenis pengujian.)

**9. Tim Pengujian**

(Sertakan daftar tim pengujian dengan peran dan tanggung jawab mereka.)

**10. Komunikasi dan Pelaporan**

*   Komunikasi akan dilakukan secara teratur antara tim pengembang, tim penguji, dan pemangku kepentingan.
*   Laporan pengujian akan dibuat secara berkala untuk melacak kemajuan pengujian dan mengidentifikasi cacat.
*   Cacat akan dilaporkan dan dilacak menggunakan sistem pelacakan cacat (misalnya, Jira).

**11. Risiko dan Mitigasi**

(Identifikasi potensi risiko pengujian dan rencana mitigasinya.)

**Contoh Risiko:**

*   Kurangnya sumber daya pengujian. **Mitigasi:** Prioritaskan pengujian dan alokasikan sumber daya yang tersedia secara efektif.
*   Keterlambatan dalam pengembangan dapat mempengaruhi jadwal pengujian. **Mitigasi:** Komunikasikan secara teratur dengan tim pengembangan dan sesuaikan jadwal pengujian sesuai kebutuhan.
*   Lingkungan pengujian tidak mewakili lingkungan produksi dengan akurat. **Mitigasi:** Pastikan lingkungan staging identik dengan lingkungan produksi.

Oke, berikut adalah contoh tabel kasus uji (test cases) untuk Sistem Perpustakaan Cerdas dengan AI. Ini hanyalah contoh, dan Anda perlu menyesuaikannya sesuai dengan fitur dan fungsionalitas spesifik sistem Anda.

**Contoh Kasus Uji: Sistem Perpustakaan Cerdas dengan AI**

**1. Modul: Pencarian (Search)**

| ID Kasus Uji | Deskripsi                                                                | Langkah-Langkah                                                                                                                                                   | Data Input                                                                          | Hasil yang Diharapkan                                                                                                                                                             | Jenis Pengujian    | Prioritas | Status |
|-------------|-----------------------------------------------------------------------------|-------------------------------------------------------------------------------------------------------------------------------------------------------------------|---------------------------------------------------------------------------------------|-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------|-------------------|----------|--------|
| TC_SRCH_001 | Pencarian dengan kata kunci yang valid.                                   | 1. Buka halaman pencarian.<br>2. Masukkan kata kunci "Artificial Intelligence" di kolom pencarian.<br>3. Klik tombol "Cari".                                | Kata kunci: "Artificial Intelligence"                                                    | Daftar buku, jurnal, dan sumber daya lain yang relevan dengan "Artificial Intelligence" ditampilkan.                                                                    | Skenario         | Tinggi   |        |
| TC_SRCH_002 | Pencarian dengan kata kunci yang tidak valid.                                 | 1. Buka halaman pencarian.<br>2. Masukkan kata kunci "asdfghjkl" di kolom pencarian.<br>3. Klik tombol "Cari".                                                       | Kata kunci: "asdfghjkl"                                                                | Pesan "Tidak ada hasil ditemukan" ditampilkan.                                                                                                                                         | Skenario         | Tinggi   |        |
| TC_SRCH_003 | Pencarian dengan bahasa alami (Natural Language).                           | 1. Buka halaman pencarian.<br>2. Masukkan pertanyaan "Buku apa tentang perubahan iklim untuk pemula?" di kolom pencarian.<br>3. Klik tombol "Cari".             | Pertanyaan: "Buku apa tentang perubahan iklim untuk pemula?"                                 | Daftar buku yang relevan dengan pertanyaan tersebut ditampilkan.                                                                                                                    | Integrasi       | Tinggi   |        |
| TC_SRCH_004 | Pencarian dengan filter (Genre, Author).                                  | 1. Buka halaman pencarian.<br>2. Masukkan kata kunci "AI" di kolom pencarian.<br>3. Klik tombol "Cari".<br>4. Pilih filter "Genre: Science Fiction".<br>5. Klik "Apply Filter". | Kata kunci: "AI", Filter: "Genre: Science Fiction"                                         | Daftar buku dan sumber daya yang relevan dengan "AI" dan bergenre "Science Fiction" ditampilkan.                                                                                    | Integrasi       | Sedang   |        |
| TC_SRCH_005 | Pencarian tanpa memasukkan kata kunci.                                   | 1. Buka halaman pencarian.<br>2. Klik tombol "Cari" tanpa memasukkan kata kunci apa pun.                                                                        | (Kolom pencarian kosong)                                                               | Sistem menampilkan pesan yang memberitahu pengguna untuk memasukkan kata kunci terlebih dahulu.                                                                                  | Skenario         | Tinggi   |        |
| TC_SRCH_006 | Validasi fungsi saran (suggestions) saat mengetik.                         | 1. Buka halaman pencarian.<br>2. Ketik "Art" di kolom pencarian.                                                                                               | Input: "Art"                                                                            | Daftar saran seperti "Artificial Intelligence", "Art History", "The Art of War" ditampilkan.                                                                                         | Unit              | Sedang   |        |

**2. Modul: Katalog (Catalog)**

| ID Kasus Uji | Deskripsi                                                              | Langkah-Langkah                                                                                                                                                                                                                                                                                                                                                                                                                                            | Data Input                                                                                                                                                 | Hasil yang Diharapkan                                                                                                                                                                                                                                                                              | Jenis Pengujian    | Prioritas | Status |
|-------------|---------------------------------------------------------------------------|------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------|--------------------------------------------------------------------------------------------------------------------------------------------------------------|-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------|-------------------|----------|--------|
| TC_CAT_001 | Menambahkan buku baru ke katalog oleh Admin.                               | 1. Login sebagai Admin.<br>2. Buka halaman manajemen katalog.<br>3. Klik tombol "Tambah Buku".<br>4. Isi semua kolom yang diperlukan (Judul, Penulis, ISBN, dll.).<br>5. Klik tombol "Simpan".                                                                                                                                                                                                                                                  | Judul: "The Hitchhiker's Guide to the Galaxy", Penulis: "Douglas Adams", ISBN: "978-0345391803", Penerbit: "Del Rey", Tahun: 1979, Genre: Science Fiction, Ringkasan: "A comedic science fiction adventure following the misadventures of Arthur Dent." | Buku baru berhasil ditambahkan ke katalog. Pesan "Buku berhasil ditambahkan" ditampilkan.                                                                                                                                                                                 | Integrasi       | Tinggi   |        |
| TC_CAT_002 | Mengedit informasi buku oleh Admin.                                       | 1. Login sebagai Admin.<br>2. Buka halaman manajemen katalog.<br>3. Cari buku yang akan diedit.<br>4. Klik tombol "Edit".<br>5. Ubah salah satu kolom (misalnya, ringkasan).<br>6. Klik tombol "Simpan".                                                                                                                                                                                                                                               | Judul: "The Hitchhiker's Guide to the Galaxy", Ringkasan Baru: "A hilarious and insightful science fiction adventure..."                                 | Informasi buku berhasil diperbarui di katalog. Pesan "Informasi buku berhasil diperbarui" ditampilkan.                                                                                                                                                                     | Integrasi       | Tinggi   |        |
| TC_CAT_003 | Mencoba menambahkan buku dengan ISBN yang sudah ada.                          | 1. Login sebagai Admin.<br>2. Buka halaman manajemen katalog.<br>3. Klik tombol "Tambah Buku".<br>4. Isi semua kolom yang diperlukan, menggunakan ISBN buku yang sudah ada.<br>5. Klik tombol "Simpan".                                                                                                                                                                                                                                                | ISBN: ISBN buku yang sudah ada di database.                                                                                                                | Sistem menolak untuk menambahkan buku dengan ISBN yang sama. Pesan kesalahan "ISBN sudah terdaftar" ditampilkan.                                                                                                                                                            | Skenario         | Tinggi   |        |
| TC_CAT_004 | Validasi input (format ISBN).                                           | 1. Login sebagai Admin.<br>2. Buka halaman manajemen katalog.<br>3. Klik tombol "Tambah Buku".<br>4. Isi kolom ISBN dengan format yang tidak valid (misalnya, karakter non-numerik).<br>5. Klik tombol "Simpan".                                                                                                                                                                                                                                          | ISBN: Format ISBN yang tidak valid (misalnya, "ABC-123")                                                                                              | Sistem menampilkan pesan kesalahan yang memberitahu pengguna tentang format ISBN yang benar.                                                                                                                                                                               | Unit              | Tinggi   |        |
| TC_CAT_005 | Melihat detail buku.                                                        | 1. Buka halaman katalog.<br>2. Cari buku yang akan dilihat detailnya.<br>3. Klik pada judul buku.                                                                                                                                                                                                                                                                                                                                                        | (Klik pada judul buku)                                                                                                                                  | Halaman detail buku dengan semua informasi (Judul, Penulis, ISBN, Ringkasan, dll.) ditampilkan.                                                                                                                                                                            | Skenario         | Tinggi   |        |
| TC_CAT_006 | Menghapus buku dari katalog oleh Admin.                               | 1. Login sebagai Admin.<br>2. Buka halaman manajemen katalog.<br>3. Cari buku yang akan dihapus.<br>4. Klik tombol "Hapus".<br>5. Konfirmasi penghapusan.                                                                                                                                                                                                                                            |  (Hapus buku)                                                                                            | Buku berhasil dihapus dari katalog.                                                                                                                               | Integrasi       | Tinggi   |        |

**3. Modul: Rekomendasi (Recommendations)**

| ID Kasus Uji | Deskripsi                                                                 | Langkah-Langkah                                                                                                                                                                          | Data Input                                                                 | Hasil yang Diharapkan                                                                                                                                                                                                                | Jenis Pengujian    | Prioritas | Status |
|-------------|------------------------------------------------------------------------------|-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------|------------------------------------------------------------------------------|----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------|-------------------|----------|--------|
| TC_RECOM_001 | Rekomendasi yang dipersonalisasi untuk pengguna dengan riwayat bacaan.     | 1. Login sebagai pengguna dengan riwayat bacaan yang signifikan (misalnya, sering membaca buku fiksi ilmiah).<br>2. Buka halaman rekomendasi.                                       | Pengguna dengan riwayat bacaan fiksi ilmiah.                                   | Daftar buku fiksi ilmiah yang direkomendasikan ditampilkan.                                                                                                                                                                      | Integrasi       | Tinggi   |        |
| TC_RECOM_002 | Rekomendasi untuk pengguna baru (tanpa riwayat bacaan).                     | 1. Login sebagai pengguna baru (tanpa riwayat bacaan).<br>2. Buka halaman rekomendasi.                                                                                           | Pengguna baru (tanpa riwayat bacaan).                                         | Daftar buku populer atau buku baru yang direkomendasikan ditampilkan (rekomendasi default).                                                                                                                                              | Integrasi       | Sedang   |        |
| TC_RECOM_003 | Memeriksa akurasi rekomendasi (konten berbasis).                          | 1. Login sebagai pengguna yang sering membaca buku tentang AI.<br>2. Buka halaman rekomendasi.<br>3. Periksa apakah rekomendasi yang ditampilkan relevan dengan AI.              | Pengguna dengan riwayat bacaan tentang AI.                                  | Sebagian besar rekomendasi yang ditampilkan harus relevan dengan AI (misalnya, buku tentang machine learning, deep learning, NLP).                                                                                                    | Integrasi       | Tinggi   |        |
| TC_RECOM_004 | Memeriksa akurasi rekomendasi (kolaboratif).                             | 1. Temukan dua pengguna yang memiliki minat yang sama (misalnya, keduanya menyukai fiksi ilmiah dan fantasi).<br>2. Periksa apakah rekomendasi yang ditampilkan serupa untuk kedua pengguna. | Dua pengguna dengan minat fiksi ilmiah dan fantasi yang sama.                     | Rekomendasi yang ditampilkan untuk kedua pengguna harus memiliki beberapa tumpang tindih (buku yang sama direkomendasikan kepada keduanya).                                                                                                  | Integrasi       | Sedang   |        |
| TC_RECOM_005 | Memeriksa mengapa buku direkomendasikan.                                | 1. Login sebagai pengguna.<br>2. Buka halaman rekomendasi.<br>3. Cari informasi yang menjelaskan mengapa buku tersebut direkomendasikan.                                      | (Melihat informasi mengapa buku direkomendasikan)                                | Sistem menampilkan informasi yang menjelaskan mengapa buku tersebut direkomendasikan (misalnya, "Karena Anda menyukai buku X", "Karena pengguna lain dengan minat yang sama menyukai buku ini").                                                | Skenario         | Sedang   |        |
| TC_RECOM_006 | Validasi score rekomendasi.                                | 1. Periksa score rekomendasi, jika score tinggi, maka buku diprioritaskan di paling atas | (cek score rekomendasi)                                 | Sistem menampilkan buku dengan score rekomendasi yang tinggi di paling atas | Skenario         | Sedang   |        |

**Penjelasan Kolom:**

*   **ID Kasus Uji:** Pengidentifikasi unik untuk setiap kasus uji.
*   **Deskripsi:** Ringkasan singkat tentang apa yang diuji.
*   **Langkah-Langkah:** Instruksi terperinci tentang cara melakukan pengujian.
*   **Data Input:** Data yang diperlukan untuk melakukan pengujian.
*   **Hasil yang Diharapkan:** Hasil yang seharusnya terjadi jika pengujian berhasil.
*   **Jenis Pengujian:** Jenis pengujian yang dilakukan (Unit, Skenario, Integrasi, UAT).
*   **Prioritas:** Tingkat kepentingan kasus uji (Tinggi, Sedang, Rendah).
*   **Status:** Status kasus uji (Belum Diuji, Lulus, Gagal, Diblokir).

Oke, berikut adalah contoh daftar pengujian unit (unit tests) untuk beberapa komponen utama dari Sistem Perpustakaan Cerdas dengan AI, ditulis dalam konteks bahasa dan framework yang digunakan (Laravel untuk backend, Nuxt.js untuk frontend). Daftar ini akan membantumu untuk memahami apa saja yang perlu diuji pada tingkat unit, serta memberikan contoh penamaan test case yang baik.

**Daftar Pengujian Unit: Sistem Perpustakaan Cerdas dengan AI**

**A. Backend (Laravel)**

**1. Model: Book (App\Models\Book)**

*   **Test Cases:**
    *   `test_book_can_be_created_with_valid_data` - Memastikan buku dapat dibuat dengan data yang valid.
    *   `test_book_title_is_required` - Memastikan bahwa kolom judul wajib diisi.
    *   `test_book_isbn_is_unique` - Memastikan bahwa ISBN harus unik di database.
    *   `test_book_isbn_must_be_valid_format` - Memastikan format ISBN valid (misalnya, harus terdiri dari angka dan tanda hubung).
    *   `test_book_has_author_attribute` - Memastikan bahwa model memiliki atribut `author`.
    *   `test_book_has_genre_attribute` - Memastikan bahwa model memiliki atribut `genre`.
    *   `test_book_has_summary_attribute` - Memastikan bahwa model memiliki atribut `summary`.
    *   `test_book_can_be_updated` - Memastikan data buku dapat diperbarui.
*   **Tools:** PHPUnit (bawaan Laravel)

**2. Model: User (App\Models\User)**

*   **Test Cases:**
    *   `test_user_can_be_created_with_valid_data` - Memastikan pengguna dapat dibuat dengan data yang valid.
    *   `test_user_email_is_required` - Memastikan kolom email wajib diisi.
    *   `test_user_email_is_unique` - Memastikan email harus unik di database.
    *   `test_user_password_is_hashed_on_creation` - Memastikan bahwa kata sandi di-hash saat pengguna dibuat.
    *   `test_user_can_change_password` - Memastikan bahwa pengguna dapat mengubah kata sandi.
    *   `test_user_has_role_attribute` - Memastikan bahwa model memiliki atribut `role`.
    *   `test_user_can_have_many_recommendations` - Memastikan relasi one-to-many dengan tabel `recommendations` berfungsi dengan benar.
*   **Tools:** PHPUnit (bawaan Laravel)

**3. Controller: SearchController (App\Http\Controllers\SearchController)**

*   **Test Cases:**
    *   `test_search_endpoint_returns_success_response` - Memastikan endpoint `/api/search` mengembalikan respons sukses (kode 200).
    *   `test_search_endpoint_returns_json_data` - Memastikan respons yang dikembalikan dalam format JSON.
    *   `test_search_endpoint_returns_relevant_results_for_keyword` - Memastikan endpoint mengembalikan hasil yang relevan untuk kata kunci tertentu.
    *   `test_search_endpoint_handles_empty_query` - Memastikan endpoint menangani kueri kosong dengan benar.
    *   `test_search_endpoint_uses_ai_service` - Memastikan bahwa controller menggunakan layanan AI (mocking AI service response).
    *   `test_search_endpoint_handles_ai_service_failure` - Memastikan controller menangani kegagalan layanan AI dengan baik (misalnya, dengan mengembalikan pesan kesalahan yang ramah).
    *   `test_search_endpoint_respects_pagination_parameters` - Memastikan controller menggunakan parameter pagination dengan benar.
*   **Tools:** PHPUnit, Mockery (untuk mocking external services)

**4. Controller: CatalogController (App\Http\Controllers\CatalogController)**

*   **Test Cases:**
    *   `test_catalog_store_method_creates_new_book` - Memastikan method `store` membuat buku baru di database.
    *   `test_catalog_update_method_updates_existing_book` - Memastikan method `update` memperbarui buku yang ada di database.
    *   `test_catalog_destroy_method_deletes_book` - Memastikan method `destroy` menghapus buku dari database.
    *   `test_catalog_store_method_validates_input` - Memastikan method `store` memvalidasi input dengan benar (misalnya, ISBN harus valid).
    *   `test_catalog_update_method_validates_input` - Memastikan method `update` memvalidasi input dengan benar.
    *   `test_catalog_store_method_requires_authentication` - Memastikan bahwa hanya pengguna yang terotentikasi (dan memiliki peran yang sesuai) yang dapat mengakses method `store`.
    *   `test_catalog_update_method_requires_authorization` - Memastikan bahwa hanya pengguna yang diotorisasi (dengan peran yang sesuai) yang dapat mengakses method `update`.
*   **Tools:** PHPUnit, Mockery

**B. Frontend (Nuxt.js)**

**1. Komponen: SearchBar (components/SearchBar.vue)**

*   **Test Cases:**
    *   `test_search_bar_emits_search_event_on_submit` - Memastikan bahwa komponen memancarkan event `search` saat formulir disubmit.
    *   `test_search_bar_displays_suggestions_when_typing` - Memastikan bahwa komponen menampilkan saran saat pengguna mengetik.
    *   `test_search_bar_hides_suggestions_on_blur` - Memastikan bahwa saran disembunyikan saat input kehilangan fokus.
    *   `test_search_bar_clears_input_on_clear_button_click` - Memastikan bahwa input dibersihkan saat tombol clear diklik.
    *   `test_search_bar_suggestions_are_correct` - Memastikan bahwa saran yang ditampilkan akurat dan relevan.
*   **Tools:** Jest, Vue Test Utils

**2. Komponen: ResourceCard (components/ResourceCard.vue)**

*   **Test Cases:**
    *   `test_resource_card_displays_title` - Memastikan bahwa komponen menampilkan judul sumber daya.
    *   `test_resource_card_displays_author` - Memastikan bahwa komponen menampilkan penulis sumber daya.
    *   `test_resource_card_displays_cover_image` - Memastikan bahwa komponen menampilkan gambar sampul sumber daya.
    *   `test_resource_card_emits_view_details_event_on_click` - Memastikan bahwa komponen memancarkan event `view-details` saat diklik.
*   **Tools:** Jest, Vue Test Utils

**3. Halaman: SearchPage (pages/search.vue)**

*   **Test Cases:**
    *   `test_search_page_displays_search_bar` - Memastikan bahwa halaman menampilkan komponen `SearchBar`.
    *   `test_search_page_displays_resource_list` - Memastikan bahwa halaman menampilkan komponen `ResourceList`.
    *   `test_search_page_fetches_search_results_on_mount` - Memastikan bahwa halaman mengambil hasil pencarian saat di-mount.
    *   `test_search_page_displays_loading_indicator_while_fetching_results` - Memastikan bahwa halaman menampilkan indikator loading saat mengambil hasil.
    *   `test_search_page_displays_no_results_message_when_no_results_are_found` - Memastikan bahwa halaman menampilkan pesan "Tidak ada hasil ditemukan" jika tidak ada hasil yang ditemukan.
*   **Tools:** Jest, Vue Test Utils, Mocking API calls (menggunakan `vi.mock` atau library serupa)
