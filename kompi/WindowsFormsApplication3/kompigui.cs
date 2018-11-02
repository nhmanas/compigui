using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
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
            Form1 a = new Form1();
            kompigui fr2 = new kompigui();
            this.Visible = true;
            a.Show();
            this.Hide();
        }

        private void execute_Click(object sender, EventArgs e)
        {
            string strCmdText;
            strCmdText = "/C ping google.com";
            System.Diagnostics.Process.Start("CMD.exe", strCmdText);
            strCmdText = "/C pause";
            System.Diagnostics.Process.Start("CMD.exe", strCmdText);
        }
    }
}
