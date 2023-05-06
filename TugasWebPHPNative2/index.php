<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./style.css" />
    <title>Tugas Web PHP Native 1 - Wasi</title>
  </head>
  <body>
    <div class="main-content">
      <h1>Tugas Web PHP Native 1</h1>
      <section class="card">
        <h3>Detail</h3>
        <div>
          <p>
            1. Tambahkan menu-menu lainnya, ambil dari hasil percobaan sebelumnya, seperti about, contact dan data(menggunakan table)<br/>
            2. Pastikan berjalan dengan template admin yang Percobaan 1. <br/>
            3. Implementasi Login menggunakan template
          </p>
        </div>
      </section>
      <section class="card">
        <h3>Routes</h3>
          <div class="data-hasil">
            <div class="scroll">
              <table width=100%>
                <thead>
                  <tr>
                    <th>Dashboard</th>
                    <th>Authentication</th>
                    <th>Error</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td><a href="admin/" target="_blank" rel="noopener noreferrer">Home Dashboard</a></td>
                    <td><a href="auth/" target="_blank" rel="noopener noreferrer">Home Auth</a></td>
                    <td><a href="admin/error/" target="_blank" rel="noopener noreferrer">Home Error</a></td>
                  </tr>
                  <tr>
                    <td><a href="admin/?url=product" target="_blank" rel="noopener noreferrer">Data Produk</a></td>
                    <td><a href="auth/?url=login" target="_blank" rel="noopener noreferrer">Login</a></td>
                    <td><a href="admin/error/" target="_blank" rel="noopener noreferrer">Error 401</a></td>
                  </tr>
                  <tr>
                    <td><a href="admin/?url=charts" target="_blank" rel="noopener noreferrer">Charts</a></td>
                    <td><a href="auth/?url=register" target="_blank" rel="noopener noreferrer">Register</a></td>
                    <td><a href="admin/error/?url=" target="_blank" rel="noopener noreferrer">Error 404</a></td>
                  </tr>
                  <tr>
                    <td><a href="admin/?url=tables" target="_blank" rel="noopener noreferrer">Tables</a></td>
                    <td><a href="auth/?url=password" target="_blank" rel="noopener noreferrer">Forget Password</a></td>
                    <td><a href="admin/error/?url=" target="_blank" rel="noopener noreferrer">Error 500</a></td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
            
        <br />
        <br />
      </section>
    </div>
  </body>
</html>