﻿using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.IO;
using System.Windows.Forms;

namespace WindowsFormsApplication3
{
    public partial class kompigui : Form

    {
        public kompigui()
        {
            InitializeComponent();
        }

        private void pictureBox1_Click(object sender, EventArgs e)
        {
            Application.Exit();
        }

        private void button1_Click(object sender, EventArgs e)
        {
            loginscreen a = new loginscreen();
            kompigui fr2 = new kompigui();
            //this.Visible = true;
            a.Show();
            this.Close();
        }

        private void execute_Click(object sender, EventArgs e)
        {
            string strCmdText;
            string destination = textBox1.Text;
            strCmdText = "/C compact /c /s /a /i /exe:lzx '" + destination + "'";
            System.Diagnostics.Process.Start("CMD.exe", strCmdText);
        }

        private void kompigui_Load(object sender, EventArgs e)
        {
            //DRIVE TARAMA
            foreach (var Drives in Environment.GetLogicalDrives())
            {
                DriveInfo DriveInf = new DriveInfo(Drives);
                if (DriveInf.IsReady == true)
                {
                    comboBox7.Items.Add(DriveInf.Name);
                }
            }
        }

        private void button3_Click(object sender, EventArgs e)
        {
            string strCmdText;
            string dirdes1 = dirdes.Text;
            strCmdText = "/C compact /c /s /a /i /exe:lzx '" + dirdes1 + " *'";
            System.Diagnostics.Process.Start("CMD.exe", strCmdText);
        }

        private void groupBox1_Enter(object sender, EventArgs e)
        {

        }

        private void button5_Click(object sender, EventArgs e)
        {
            
        }

        private void comboBox2_SelectedIndexChanged(object sender, EventArgs e)
        {
            
        }

        private void button4_Click(object sender, EventArgs e)
        {
            /*
            DriveInfo[] allDrives = System.IO.DriveInfo.GetDrives();
            for (int i = 1; i < 7; i++)
            {
                comboBox7.Items.Add(allDrives[i]);
            }
            */

            /*
            comboBox7.DataSource = System.IO.DriveInfo.GetDrives()
                .Where(d => d.DriveType == System.IO.DriveType.Network);
            comboBox7.DisplayMember = "Name";
            */

        }

        private void button2_Click(object sender, EventArgs e)
        {

        }
    }
}