<script>
  function isValidDomain(v) {
  if (!v) return false;
  var re = /^(?!:\/\/)([a-zA-Z0-9-]+\.){0,5}[a-zA-Z0-9-][a-zA-Z0-9-]+\.[a-zA-Z]{2,64}?$/gi;
  return re.test(v);
}


isValidDomain('example.com') // true
isValidDomain('foo.example.com') // true
isValidDomain('bar.foo.example.com') // true
isValidDomain('exa-mple.co.uk') // true
isValidDomain('exa_mple.com') // false
isValidDomain('example') // false
isValidDomain('ex*mple.com') // false
isValidDomain(3434) // false

</script>

<?php
function is_valid_domain_name($domain_name)
{
    return (preg_match("/^([a-z\d](-*[a-z\d])*)(\.([a-z\d](-*[a-z\d])*))*$/i", $domain_name) //valid chars check
            && preg_match("/^.{1,253}$/", $domain_name) //overall length check
            && preg_match("/^[^\.]{1,63}(\.[^\.]{1,63})*$/", $domain_name)   ); //length of each label
}
is_valid_domain_name? [a]                       Y
is_valid_domain_name? [0]                       Y
is_valid_domain_name? [a.b]                     Y
is_valid_domain_name? [localhost]               Y
is_valid_domain_name? [google.com]              Y
is_valid_domain_name? [news.google.co.uk]       Y
is_valid_domain_name? [xn--fsqu00a.xn--0zwm56d] Y
is_valid_domain_name? [goo gle.com]             N
is_valid_domain_name? [google..com]             N
is_valid_domain_name? [google.com ]             N
is_valid_domain_name? [google-.com]             N
is_valid_domain_name? [.google.com]             N
is_valid_domain_name? [<script]                 N
is_valid_domain_name? [alert(]                  N
is_valid_domain_name? [.]                       N
is_valid_domain_name? [..]                      N
is_valid_domain_name? [ ]                       N
is_valid_domain_name? [-]                       N
is_valid_domain_name? []                        N
?>
