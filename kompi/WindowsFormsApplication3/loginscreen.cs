using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;
using MySql.Data;
using MySql.Data.MySqlClient;
using System.Security.Cryptography;

namespace WindowsFormsApplication3
{
    public partial class loginscreen : Form
    {
       

	
        private static string sIp = "localhost";
        private static string sDB = "registration"; 
        private static string sKA = "root"; 
        private static string sSifre = ""; 
        public MySqlConnection mysqlbaglan = new MySqlConnection("Server=" + sIp + ";Database=" + sDB + ";Uid=" + sKA + ";Pwd='" + sSifre + "';");
        public static string MD5(string metin)
        {
            
            MD5CryptoServiceProvider md5 = new MD5CryptoServiceProvider();

           
            byte[] btr = Encoding.UTF8.GetBytes(metin);
            btr = md5.ComputeHash(btr);

           
            StringBuilder sb = new StringBuilder();


            
            foreach (byte ba in btr)
            {
                sb.Append(ba.ToString("x2").ToLower());
            }

            
            return sb.ToString();
        }

        public loginscreen()
        {
                   InitializeComponent();
            


       }
       

        private void textBox1_TextChanged(object sender, EventArgs e)
        {
            
        }

        private void checkBox2_CheckedChanged(object sender, EventArgs e)
        {
           
        }

        private void Form1_Load(object sender, EventArgs e)
        {

        }

        private void button1_Click(object sender, EventArgs e)
        {
            string user = textBox1.Text;
            string pass = textBox2.Text;
  
            mysqlbaglan.Open();
            if (mysqlbaglan.State != ConnectionState.Closed)
            {
                string str = MD5(textBox2.Text);
                textBox2.Text = str;
                string sql = "SELECT * FROM `users` WHERE `username` = '" + textBox1.Text + "' AND `password` = '" + textBox2.Text + "' ";
                MySqlCommand cmd = new MySqlCommand(sql, mysqlbaglan);
                MySqlDataReader rdr = cmd.ExecuteReader();
                
                if (rdr.Read())
                {
                    kompigui frm = new kompigui();
                    frm.Show();
                    this.Hide();
                }


                else
                {
                    MessageBox.Show("Invalid username/password.");
                }
                rdr.Close();
            }
            else
            {
                MessageBox.Show("No connection !");
            }
            mysqlbaglan.Close();
        }

        private void label1_Click(object sender, EventArgs e)
        {

        }

        private void textBox2_TextChanged(object sender, EventArgs e)
        {
            
        }

        private void label2_Click(object sender, EventArgs e)
        {

        }

       
    }
}
