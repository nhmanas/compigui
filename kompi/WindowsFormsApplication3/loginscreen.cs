﻿using System;
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



        private static string sIp = "sql7.freesqldatabase.com";
        private static string sPt = "3306";
        private static string sDB = "sql7271816";
        private static string sKA = "sql7271816";
        private static string sSifre = "vXcVpd6JZs";
        public MySqlConnection mysqlbaglan = new MySqlConnection("Server=" + sIp + ";Port=" + sPt + ";Database=" + sDB + ";Uid=" + sKA + ";Pwd='" + sSifre + "';");
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
            progressBar1.Visible = true;
            button3.Visible = false;
            string user = textBox1.Text;
            string pass = textBox2.Text;
            

            mysqlbaglan.Open();
            if (mysqlbaglan.State != ConnectionState.Closed)
            {
                char paid = 'p';
                string str = MD5(textBox2.Text);
                textBox2.Text = str;
                string sql = "SELECT * FROM `users` WHERE `username` = '" + textBox1.Text + "' AND `password` = '" + textBox2.Text + "' ";
                string sqlpay = "SELECT * FROM `users` WHERE `username` = '" + textBox1.Text + "' AND `pay` = '" + paid + "' ";
                MySqlCommand pay = new MySqlCommand(sqlpay, mysqlbaglan);

                MySqlCommand cmd = new MySqlCommand(sql, mysqlbaglan);
                MySqlDataReader rdr = cmd.ExecuteReader();


                if (rdr.Read())
                {
                    mysqlbaglan.Close();
                    mysqlbaglan.Open();

                    MySqlDataReader rdrpay = pay.ExecuteReader();
                    if (rdrpay.Read())
                    {
                        kompigui frm = new kompigui();
                        frm.Show();
                        this.Hide();
                        mysqlbaglan.Close();
                    }
                    else
                    {
                        MessageBox.Show("You didn't pay for it. Please buy first.");
                    }

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

        private void button2_Click(object sender, EventArgs e)
        {
            panel frm = new panel();
            frm.Show();
        }

        private void button3_Click(object sender, EventArgs e)
        {
            kompigui frm = new kompigui();
            frm.Show();
            this.Hide();
        }

        private void pictureBox2_MouseMove(object sender, MouseEventArgs e)
        {
            
        }
        
        private void pictureBox2_MouseDown(object sender, MouseEventArgs e)
        {
            
        }

        private void pictureBox2_Click(object sender, EventArgs e)
        {

        }

        private void pictureBox1_Click(object sender, EventArgs e)
        {
            Application.Exit();
        }

        private void pictureBox2_MouseDown_1(object sender, MouseEventArgs e)
        {
            lastPoint = new Point(e.X, e.Y);
        }
        Point lastPoint;
        private void pictureBox2_MouseMove_1(object sender, MouseEventArgs e)
        {
            if (e.Button == MouseButtons.Left)
            {
                this.Left += e.X - lastPoint.X;
                this.Top += e.Y - lastPoint.Y;
            }
        }
    }
}
