<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
* Name:  Ion Auth Lang - English
*
* Author: Ben Edmunds
*         ben.edmunds@gmail.com
*         @benedmunds
*
* Location: http://github.com/benedmunds/ion_auth/
*
* Created:  03.14.2010
*
* Description:  English language file for Ion Auth messages and errors
*
*/

// Account Creation
$lang['account_creation_successful'] = 'Akun Berhasil Dibuat';
$lang['account_creation_unsuccessful'] = 'Tidak Dapat Membuat Akun';
$lang['account_creation_duplicate_email'] = 'Email Sudah Digunakan atau Tidak Valid';
$lang['account_creation_duplicate_identity'] = 'Identitas Sudah Digunakan atau Tidak Valid';
$lang['account_creation_missing_default_group'] = 'Grup default tidak disetel';
$lang['account_creation_invalid_default_group'] = 'Set nama grup default tidak valid';


// Kata Sandi
$lang['password_change_successful'] = 'Kata Sandi Berhasil Diubah';
$lang['password_change_unsuccessful'] = 'Tidak Dapat Mengubah Kata Sandi';
$lang['forgot_password_successful'] = 'Reset Kata Sandi Email Dikirim';
$lang['forgot_password_unsuccessful'] = 'Tidak Dapat Mereset Kata Sandi';

// Aktivasi
$lang['activ_successful'] = 'Akun Diaktifkan';
$lang['activ_unsuccessful'] = 'Tidak Dapat Mengaktifkan Akun';
$lang['deactivate_successful'] = 'Akun Tidak Aktif';
$lang['deactivate_unsuccessful'] = 'Tidak Dapat Menonaktifkan Akun';
$lang['activation_email_successful'] = 'Aktivasi Email Terkirim';
$lang['activation_email_unsuccessful'] = 'Tidak Dapat Mengirim Email Aktivasi';

// Masuk / Keluar
$lang['login_successful'] = 'Masuk dengan Sukses';
$lang['login_unsuccessful'] = 'Login Salah';
$lang['login_unsuccessful_not_active'] = 'Akun tidak aktif';
$lang['login_timeout'] = 'Terkunci Sementara. Coba lagi nanti.';
$lang['logout_successful'] = 'Keluar Berhasil';

// Perubahan Akun
$lang['update_successful'] = 'Informasi Akun Berhasil Diperbarui';
$lang['update_unsuccessful'] = 'Tidak Dapat Memperbarui Informasi Akun';
$lang['delete_successful'] = 'Pengguna Dihapus';
$lang['delete_unsuccessful'] = 'Tidak Dapat Menghapus Pengguna';

// Grup
$lang['group_creation_successful'] = 'Grup dibuat dengan sukses';
$lang['group_already_exists'] = 'Nama grup sudah diambil';
$lang['group_update_successful'] = 'Detail grup diperbarui';
$lang['group_delete_successful'] = 'Grup dihapus';
$lang['group_delete_unsuccessful'] = 'Tidak dapat menghapus grup';
$lang['group_delete_notallowed'] = 'Tidak dapat menghapus administrator \' grup ';
$lang['group_name_required'] = 'Nama grup adalah bidang wajib';
$lang['group_name_admin_not_alter'] = 'Nama grup admin tidak dapat diubah';

// Email Aktivasi
$lang['email_activation_subject'] = 'Aktivasi Akun';
$lang['email_activate_heading'] = 'Aktifkan akun untuk% s';
$lang['email_activate_subheading'] = 'Silakan klik tautan ini ke% s.';
$lang['email_activate_link'] = 'Aktifkan Akun Anda';

// Lupa Kata Sandi Email
$lang['email_forgotten_password_subject'] = 'Lupa Kata Sandi Verifikasi';
$lang['email_forgot_password_heading'] = 'Setel Ulang Kata Sandi untuk %s';
$lang['email_forgot_password_subheading'] = 'Silakan klik tautan ini ke %s.';
$lang['email_forgot_password_link'] = 'Setel Ulang Kata Sandi Anda';

// Email Kata Sandi Baru
$lang['email_new_password_subject'] = 'Kata Sandi Baru';
$lang['email_new_password_heading'] = 'Kata Sandi Baru untuk %s';
$lang['email_new_password_subheading'] = 'Kata sandi Anda telah disetel ulang ke: %s';