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
            string destination = textBox1.Text;
            strCmdText = "/C compact /c /s /a /i /exe:lzx '" + destination + "'";
            System.Diagnostics.Process.Start("CMD.exe", strCmdText);
            strCmdText = "/C compact /c /s /a /i /exe:lzx '" + dirdes + " *'";
            System.Diagnostics.Process.Start("CMD.exe", strCmdText);
        }
    }
}
