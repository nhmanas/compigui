using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.IO;
using System.Diagnostics;
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
            //strCmdText /k cmd kalır, /c işlem bitince kapanır
            string dirdes1 = dirdes.Text;
            string strCmdText;
            string locationAddress;
            string cdCommand;
            string doCompress;
            locationAddress = dirdes1;
            cdCommand  = "/C " + "cd " + locationAddress;
            strCmdText = "compact /c /s /a /i /exe:lzx";
            doCompress = "/C " + strCmdText + " *";
    

            
      
            //System.Diagnostics.Process.Start("CMD.exe", strCmdText);

            //System.Diagnostics.Process process = new System.Diagnostics.Process();
            //System.Diagnostics.ProcessStartInfo startInfo = new System.Diagnostics.ProcessStartInfo();
            //startInfo.WindowStyle = System.Diagnostics.ProcessWindowStyle.Hidden;
            //startInfo.FileName = "cmd.exe";
            //startInfo.Arguments = "/C compact /c /s /a /i /exe:lzx '" + dirdes1 + " *'";
            //process.StartInfo = startInfo;
            //process.Start();
            //_output.Text = process.StandardOutput.ReadToEnd();


            Process lzx = new Process();
            System.Diagnostics.Process process = new System.Diagnostics.Process();
            System.Diagnostics.ProcessStartInfo startInfo = new System.Diagnostics.ProcessStartInfo();
            startInfo.WindowStyle = System.Diagnostics.ProcessWindowStyle.Hidden;
            lzx.StartInfo.FileName = "cmd.exe";
            lzx.StartInfo.UseShellExecute = false;
            lzx.StartInfo.WorkingDirectory = @locationAddress;
            lzx.StartInfo.Arguments = doCompress;
            lzx.StartInfo.RedirectStandardOutput = true;
            lzx.Start();
            _output.Text = lzx.StandardOutput.ReadToEnd();
            showCommand.Text = doCompress;
            showDirectory.Text = locationAddress;
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

        private void pictureBox2_MouseMove(object sender, MouseEventArgs e)
        {
            if (e.Button == MouseButtons.Left)
            {
                this.Left += e.X - lastPoint.X;
                this.Top += e.Y - lastPoint.Y;
            }
        }
        Point lastPoint;
        private void pictureBox2_MouseDown(object sender, MouseEventArgs e)
        {
            lastPoint = new Point(e.X, e.Y);
        }

        private void clear_Click(object sender, EventArgs e)
        {
            _output.Text = "";
            showDirectory.Text = "";
            showCommand.Text = "";
        }

        private void pictureBox2_Click(object sender, EventArgs e)
        {

        }

        private void dirdes_TextChanged(object sender, EventArgs e)
        {

        }

        private void comboBox1_SelectedIndexChanged(object sender, EventArgs e)
        {

        }
    }
}
