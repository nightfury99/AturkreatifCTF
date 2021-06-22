# AturkreatifCTF

### vulnerable web CTF only contains simple vulnerability:
- LFI
- SQL Injection
- bypassing file upload and rce

***If you guys find any bugs or other vuln, feel free to share with me. It'll help me a lot XXD***

## Linux Server
1. Navigate to /var/www/ and run this command: `git clone https://github.com/nightfury99/AturkreatifCTF.git`
2. `mv AturkreatifCTF html`. If you wanna use html folder, create any folder to setup virtual hosts. Follow the steps on this [page](https://www.digitalocean.com/community/tutorials/how-to-install-linux-apache-mysql-php-lamp-stack-ubuntu-18-04).
3. Change ownership for user and www-data permission to the folder. `sudo chown -R $USER:www-data /var/www/html`.
4. `sudo chmod -R 755 /var/www/html`
5. `cd html`
6. `chmod -R 771 4235290dc72241ca4ffc4ccf9c4fee98`
7. The end.
