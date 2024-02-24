# Introduce

-

### Installation

Install the dependencies and start the server.

```sh
$ git clone https://github.com/erpeel-a/Sistem-Pengaduan-Sekolah-SMKN2Karanganyar.git
$ cd Sistem-Pengaduan-Sekolah-SMKN2Karanganyar
$ composer install
$ cp .env.example to .env
$ change setting for database & generate key with php artisan key:generate
$ Call Action to Migrate Database & seeder with php artisan migrate --seed
$ Call Action to Generate JWT Secret key with php artisan jwt:secret
$ php artisan serve
```

### Prerequiste

-   Node.js
-   Composer

### Credits

-   Laravel
-   Tailwind
-   Bootstrap

### API Documentation

#### Authentication

| ENDPOINT      | Method | Description         | Data                                                         |
| ------------- | ------ | ------------------- | ------------------------------------------------------------ |
| /api/v1/login | POST   | used for user login | Body Request : email : string : _email_, password : _string_ |

Example :

```bash
http://example.dev/api/v1/login
```

| ENDPOINT       | Method | Description          | Data                     |
| -------------- | ------ | -------------------- | ------------------------ |
| /api/v1/logout | POST   | used for user logout | Authorization : _string_ |

Example :

```bash
http://example.dev/api/v1/logout
```

| ENDPOINT        | Method | Description                 | Data |
| --------------- | ------ | --------------------------- | ---- |
| /api/v1/refresh | POST   | used for user refresh token | -    |

Example :

```bash
http://example.dev/api/v1/refresh
```

#### Pengaduan

| ENDPOINT          | Method | Description                   | Data                           |
| ----------------- | ------ | ----------------------------- | ------------------------------ |
| /api/v1/pengaduan | GET    | used for show all _pengaduan_ | Authorization token : _string_ |

Example :

```bash
http://example.dev/api/v1/pengaduan
```

| ENDPOINT                         | Method | Description                      | Data                           |
| -------------------------------- | ------ | -------------------------------- | ------------------------------ |
| /api/v1/pengaduan/{pengaduan_id} | GET    | used for show detail _pengaduan_ | Authorization token : _string_ |

Example :

```bash
http://example.dev/api/v1/pengaduan
```

| ENDPOINT          | Method | Description                 | Data                                                                                                                                                                                                                                                                                                                        |
| ----------------- | ------ | --------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| /api/v1/pengaduan | POST   | used for create _pengaduan_ | Body Request : nomor*induk : \_integer*, judul*laporan : \_string*, email : _string_, no*telp : \_integer*, alamat : _string_ , jenis*pengaduan : \_string* ['aduan', 'aspirasi'] , tanggal*laporan : \_string or Date*, laporan : _string or text_, berkas*pendukung : \_file* , **Header Authorization token : _string_** |

Example :

```bash
http://example.dev/api/v1/pengaduan
```

| ENDPOINT                                      | Method | Description               | Data                                                                                                                                                                                                                                                                                                                         |
| --------------------------------------------- | ------ | ------------------------- | ---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| /api/v1/pengaduan/{pengaduan_id}?\_method=put | POST   | used for update pengaduan | Body Request : nomor*induk : \_integer*, judul*laporan : \_string*, email : _string_, no*telp : \_integer*, alamat : _string_ , jenis*pengaduan : \_string* ['aduan', 'aspirasi'] , tanggal*laporan : \_string or Date*, laporan : _string or text_, berkas*pendukung : \_file* , **Header Authorization token : _string_**, |

Example :

```bash
http://example.dev/api/v1/pengaduan/2?_method=put
```

| ENDPOINT                              | Method | Description                         | Data                                                            |
| ------------------------------------- | ------ | ----------------------------------- | --------------------------------------------------------------- |
| /api/v1/pengaduan?judul_laporan=judul | GET    | used for search _pengaduan_ by name | Query Params : _judul_laporan_ , Authorization token : _string_ |

Example :

```bash
http://example.dev/api/v1/pengaduan?judul_laporan=testjudul
```

#### Tanggapan

| ENDPOINT          | Method | Description                   | Data |
| ----------------- | ------ | ----------------------------- | ---- |
| /api/v1/tanggapan | GET    | used for show all _tanggapan_ | -    |

Example :

```bash
http://example.dev/api/v1/tanggapan
```

| ENDPOINT                                   | Method | Description                                    | Data                           |
| ------------------------------------------ | ------ | ---------------------------------------------- | ------------------------------ |
| /api/v1/tanggapan/pengaduan/{pengaduan_id} | GET    | used for detail _tanggapan_ from a _pengaduan_ | Authorization token : _string_ |

Example :

```bash
http://example.dev/api/v1/tanggapan/pengaduan/2
```

### The Project is MIT licensed.

Contributors

-   [Hendra Agil Syaputra](https://github.com/hendraaagil) as Frontend Developer
-   [Muhamad Zainal Arifin](https://github.com/Zainal21) as Backend Developer
-   [Niko Febriyanto](https://github.com/NFebri) as Backend Developer

2021 © XII RPL A SMK Telkom Jakarta.
