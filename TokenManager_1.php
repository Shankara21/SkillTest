<?php
class TokenManager
{
  private static $tokens = [];

  public static function generate($user)
  {

    // Melakukan generate token 
    $token = bin2hex(random_bytes(16));

    // Mengecek token yang dimiliki user
    if (!isset(self::$tokens[$user])) {
      self::$tokens[$user] = [];
    }

    // Mengecek panjang token
    if (count(self::$tokens[$user]) >= 10) {
      array_shift(self::$tokens[$user]);
    }

    // Menambahkan token ke dalam variable
    self::$tokens[$user][] = $token;

    return $token;
  }

  public static function verifyToken($user, $token)
  {
    // check user token
    if (!isset(self::$tokens[$user])) {
      return false;
    }

    // Mencocokkan user token
    $index = array_search($token, self::$tokens[$user]);

    // Jika token ditemukan maka hapus token sekaligus return true
    if ($index !== false) {
      unset(self::$tokens[$user][$index]);
      return true;
    }

    return false;
  }

  public static function displayToken()
  {
    var_dump(self::$tokens);
  }
}

$user = 'Muhammad Lazuardi Timur';
$user2 = 'Testing';
$token1 = TokenManager::generate($user);
$token2 = TokenManager::generate($user);
$token3 = TokenManager::generate($user);
$token4 = TokenManager::generate($user);
$token5 = TokenManager::generate($user);
$token6 = TokenManager::generate($user);
$token7 = TokenManager::generate($user);
$token8 = TokenManager::generate($user);
$token9 = TokenManager::generate($user);
$token10 = TokenManager::generate($user);
$token11 = TokenManager::generate($user);
$token12 = TokenManager::generate($user2);
if (TokenManager::verifyToken($user, $token8)) {
  echo "Token 1 Valid. \n";
} else {
  echo "Token 1 tidak valid. \n";
}


// TokenManager::displayToken();
